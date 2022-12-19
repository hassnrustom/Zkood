<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\inventory;
use App\Models\Unit;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $appends = [
        'total_quantity',
        'image_path',
    ];

    public $hidden = ['image', 'inventories'];

    public function inventories() {
        return $this->hasMany(inventory::class);
    }

    public function getTotalQuantityAttribute()
    {

        if ($this->inventories->count() >= 1){
            $total = 0;
            foreach ($this->inventories as $item) {
                $total = $total + ($item->amount * $item->unit->modifier);
            }
            return $total;
        }else {
            return 0;
        }

    }


    public function getImagePathAttribute()
    {
        return $this->image  ? $this->image->path : null;
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'model');
    }

}
