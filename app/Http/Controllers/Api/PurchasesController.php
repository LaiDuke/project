<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Purchase;
use App\Purchase_Product;
use App\Unit;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Purchase::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = new Purchase();
        $purchase->producer_id = $request->producer_id;
        if (strcmp($request->type,"Nhập hàng") == 0) $purchase->type = 1;
        elseif (strcmp($request->type,"Trả hàng") == 0) $purchase->type = -1;
        else $purchase->type = 0;
        $purchase->paid = $request->paid_money;
        $purchase->status = 1;
        $purchase->user_id = 1;
        $purchase->total_amount = 0;
        foreach ($request->p_p as $p_p) $purchase->total_amount += ($p_p['price'])*($p_p['quantity']);
        $purchase->save();
        foreach ($request->p_p as $p_p){
            $purchase_product = new Purchase_Product();
            $purchase_product->product_id = $p_p['product_id'];
            $purchase_product->property = "-";
            if (strcmp($p_p['unit_name'],'Đơn vị chuẩn')==0) $purchase_product->unit_id = 0;
            else $purchase_product->unit_id = Unit::where('name',$p_p['unit_name'])->where('product_id', $p_p['product_id'])->where('quantity',$p_p['unit'])->value('id');
            $purchase_product->quantity = ($p_p['unit'])*($p_p['quantity']);
            $purchase_product->price = ($p_p['price'])/($p_p['unit']);
            $purchase_product->left = $purchase_product->quantity;
            $purchase_product->purchase_id = $purchase->id;
            $purchase_product->save();
        }
        return response()->json(["success"=>"Nhập hàng thành công!", "purchase"=>$purchase]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
