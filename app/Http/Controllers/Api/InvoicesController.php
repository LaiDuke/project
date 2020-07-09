<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Invoice;
use App\Invoice_Product;
use App\Invoice_Purchase;
use App\Product;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return Invoice::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new Invoice();
        $invoice->customer_id = $request->customer_id;
        $invoice->total_amount = $request->total_amount;
        $invoice->paid = $request->paid_money;
        $invoice->return = 0;
        $invoice->type = 0;
        $invoice->status = 0;
        $invoice->user_id = $request->user_id;
        $invoice->save();
        foreach ($request->i_p as $i_p){
            $invoice_product = new Invoice_Product();
            $invoice_product->invoice_id = $invoice->id;
            $invoice_product->product_id = $i_p['product_id'];
            $invoice_product->unit = $i_p['unit'];
            $invoice_product->quantity = ($i_p['quantity'])*($i_p['unit']);
            $invoice_product->property = '-';
            $invoice_product->price = $i_p['price'];
            $invoice_product->save();
            $numPro = ($i_p['quantity'])*($i_p['unit']);
            $pro = Product::find($i_p['product_id']);
            foreach ($pro->Purchase as $quantity_manage){
                if ($numPro>0){
                    if ($quantity_manage->left>0){
                        if ($quantity_manage->left>=$numPro){
                            $quantity_manage->left-=$numPro;
                            $quantity_manage->save();
                            $invoice_purchase = new Invoice_Purchase();
                            $invoice_purchase->purchase_product_id = $quantity_manage->id;
                            $invoice_purchase->invoice_product_id = $invoice_product->id;
                            $invoice_purchase->quantity = $numPro;
                            $invoice_purchase->profit = ($invoice_product->price/$invoice_product->unit) - $quantity_manage->price;
                            $invoice_purchase->save();
                            $numPro=0;
                        }
                        else{
                            $numPro-=$quantity_manage->left;
                            $tmp_quantity = $quantity_manage->left;
                            $quantity_manage->left=0;
                            $quantity_manage->save();
                            $invoice_purchase = new Invoice_Purchase();
                            $invoice_purchase->purchase_product_id = $quantity_manage->id;
                            $invoice_purchase->invoice_product_id = $invoice_product->id;
                            $invoice_purchase->quantity = $tmp_quantity;
                            $invoice_purchase->profit = ($invoice_product->price/$invoice_product->unit) - $quantity_manage->price;
                            $invoice_purchase->save();
                        }
                    }
                    else continue;
                }
                else break;
            }

        }
        return response()->json(['success'=>"Thanh toán thành công"]);
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
