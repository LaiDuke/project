<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Customer[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Customer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        if ($request->imageUrl) $customer->image = "http://res.cloudinary.com/a123abc/image/upload/".$request->imageUrl;
        else $customer->image = "https://shop-media.vgsshop.vn/pub/media/catalog/product/placeholder/default/78302833_663890810807070_1551180846868725760_n.png";
        $customer->phone = $request->phone;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->note = $request->note;
        $customer->save();
        return response()->json(["customer"=>$customer,"success"=>"Khách hàng thêm thành công!"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return array|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return ['self'=>$customer,'self_purchase'=>$customer->Purchase];
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
