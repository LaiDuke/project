<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BrandsController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\PlacesController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\ProducersController;
use App\Http\Controllers\Api\PurchasesController;
use Illuminate\Http\Request;

class PurchaseViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $purchaseController = new PurchasesController();
        $purchaseController = $purchaseController->index();
        return view('purchase_index')->with(['purchases'=>$purchaseController]);
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
        $producer = new ProducersController();
        $producer = $producer->index();
        return view("purchase_create")->with(['producer'=>$producer,'product'=>$product, 'category'=>$category, 'brand'=>$brand, 'place'=>$place]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
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
