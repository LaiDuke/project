<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BrandsController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\CustomersController;
use App\Http\Controllers\Api\InvoicesController;
use App\Http\Controllers\Api\PlacesController;
use App\Http\Controllers\Api\ProducersController;
use App\Http\Controllers\Api\ProductsController;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoiceController = new InvoicesController();
        $invoiceController = $invoiceController->index();
        return view('invoice_index')->with(['invoices'=>$invoiceController]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $product = new ProductsController();
        $product = $product->index();
        $category = new CategoriesController();
        $category = $category->index();
        $brand = new BrandsController();
        $brand = $brand->index();
        $place = new PlacesController();
        $place = $place->index();
        $customer = new CustomersController();
        $customer = $customer->index();
        return view("invoice_create")->with(['customer'=>$customer,'product'=>$product, 'category'=>$category, 'brand'=>$brand, 'place'=>$place]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
