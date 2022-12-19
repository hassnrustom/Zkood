<?php

namespace App\Http\Controllers;

use App\Models\inventory;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->back()->with([
            'success_message' => 'Add New Product Successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->unit_id){
            $unit = Unit::find($request->unit_id);
            $data = Product::where('id', $request->product_id)->first();
            try {
                $total_quantity_by_unit_id = $data->total_quantity/$unit->modifier;
                $data['total_quantity_by_unit_id'] = $total_quantity_by_unit_id;
                return response()->json($data);
            } catch (\Throwable $th) {

                return response()->json([
                    'message' => 'Error In Division To Get total_quantity_by_unit_id ... Maby you Division By Zero',
                    'status' => 250
                ], 250);
            }

        }else {
            $data1 = Product::where('id', $request->product_id)->first();
            return response()->json($data1);
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function GetInfo($id) {
        $product = Product::find($id);
        if ($product) {
            return $product;
        }else {
            return response()->json([
                'message' => 'NOT_FOUND No Product Found Try Anothe id',
                'status' => 404
            ], 404);
        }

    }
}
