<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'unit_id',
        'amount'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
