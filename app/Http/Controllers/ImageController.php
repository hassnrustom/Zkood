<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->o_type == 'user')
            $user = User::find($request->o_id);
        if($request->o_type == 'product')
            $product = Product::find($request->o_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }

    public function StoreApi(StoreImageRequest $request) {
        if ($request->type == 0) {
            $user = User::find($request->id);
            if ($user) {
                $input = $request->only('path', 'description');
                $data = $user->image()->create($input);
                return $data;
            }else {
                return response()->json([
                    'message' => 'NOT_FOUND No User Found Try Anothe id',
                    'status' => 404
                ], 404);
            }

        }elseif($request->type == 1) {
            $product = Product::find($request->id);
            if ($product) {
                $input = $request->only('path', 'description');
                $data = $product->image()->create($input);
                return $data;
            }else {
                return response()->json([
                    'message' => 'NOT_FOUND No Product Found Try Anothe id',
                    'status' => 404
                ], 404);
            }

        }else {
            return response()->json([
                'message' => 'BAD_REQUEST Please Specific Request Type between (0 for user) or (1 for product)',
                'status' => 400
            ], 400);
        }
    }
}
