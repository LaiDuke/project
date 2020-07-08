<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Price;
use App\Property;
use App\Unit;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use JD\Cloudder\Facades\Cloudder;


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
        if ($request->imageUrl) $product->img = "http://res.cloudinary.com/a123abc/image/upload/".$request->imageUrl;
        else $product->img = "https://shop-media.vgsshop.vn/pub/media/catalog/product/placeholder/default/78302833_663890810807070_1551180846868725760_n.png";
        $product->name = $request->name;
        $product->qr_code = $request->qr_code;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->place_id = $request->place_id;
        $product->standard_unit = $request->standard_unit;
        if($request->ID) $product->id = $request->ID;
        $product->least_left = (int)$request->least_left;
        $product->most_left = (int)$request->most_left;
        if($request->order) $product->order = 0;
        else $product->order = 1;
        $product->user_id = (int)$request->user_id;
        $product->save();
        $price = new Price();
        $price->product_id = $product->id;
        $price->unit_id = 0;
        $price->property = '-';
        $price->price = $product->price;
        $price->save();
        if ($request->unit){
            foreach ($request->unit as $unitRequest){
                $unitRequest = (object)$unitRequest;
                $unit = new Unit();
                $unit->name = $unitRequest->name;
                if ($unitRequest->image) $unit->image = "http://res.cloudinary.com/a123abc/image/upload/".$unitRequest->image;
                else $unit->image = "https://shop-media.vgsshop.vn/pub/media/catalog/product/placeholder/default/78302833_663890810807070_1551180846868725760_n.png";
                $unit->quantity = $unitRequest->quantity;
                $unit->price = $unitRequest->price;
                $unit->product_id = $product->id ;
                if (isset($unitRequest->s_a_s))$unit->sale_as_standard = 1;
                else $unit->sale_as_standard = 0;
                $unit->save();
                $price = new Price();
                $price->product_id = $product->id;
                $price->unit_id = $unit->id;
                $price->property = '-';
                $price->price = $unit->price;
                $price->save();
            }
        }
        if ($request->property){
            foreach ($request->property as $propertyRequest){
                $propertyRequest = (object)$propertyRequest;
                $property = new Property();
                $property->name = $propertyRequest->name;
                $property->value = $propertyRequest->value;
                $property->product_id = $product->id;
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
        return ["self"=>$pro,"self_unit"=>$pro->Unit,"self_property"=>$pro->Property, "self_purchase"=>$pro->Purchase];
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
        $post = Product::find($id);
        $post->delete();
        return 1;
    }
}
