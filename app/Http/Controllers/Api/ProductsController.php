<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Property;
use App\Unit;
use Illuminate\Http\Request;
use App\Product;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->qr_code = $request->qr_code;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->place_id = $request->place_id;
        $product->standard_unit = $request->standard_unit;
        if($request->ID == null) $request->ID = $request->number_product + 1;
        $product->id = $request->ID;
        $product->least_left = 1;
        $product->most_left =99999999;
        $product->user_id = 00000000;
        if($request->order) $product->order = 0;
        else $product->order = 1;
        $product->user_id = 1;//nhớ sửa sau
        $product->save();
        if ($request->unit){
            foreach ($request->unit as $unitRequest){
                $unitRequest = (object)$unitRequest;
                $unit = new Unit();
                $unit->name = $unitRequest->name;
                $unit->quantity = $unitRequest->quantity;
                $unit->price = $unitRequest->price;
                $unit->product_id = $request->ID;
                $unit->discount = 0;
                $unit->save();
            }
        }
        if ($request->property){
            foreach ($request->property as $propertyRequest){
                $propertyRequest = (object)$propertyRequest;
                $property = new Property();
                $property->name = $propertyRequest->name;
                $property->value = $propertyRequest->value;
                $property->product_id = $request->ID;
                $property->note = "empty";
                $property->save();
            }
        }
        return response()->json(['success'=>'Sản phẩm thêm thành công!', 'product' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return array|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $pro = Product::find($id);
        return ["self"=>$pro,"self_unit"=>$pro->Unit,"self_property"=>$pro->Property];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
