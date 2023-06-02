<?php

namespace App\Http\Controllers;

use App\Models\productModel;
use App\Http\Requests\StoreproductModelRequest;
use App\Http\Requests\UpdateproductModelRequest;
use Illuminate\Support\Facades\Request;

class ProductModelController extends Controller
{
    public function display(){

        return view('add');
    }
    public function AddProduct(Request $request){
        if($request::isMethod('POST')){
            $newproduct=new productModel();
            
            $newproduct->name=$request::input('name');
            $newproduct->type=$request::input('type');
            $newproduct->price=$request::input('price');
            $newproduct->save();
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(productModel $productModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productModel $productModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductModelRequest $request, productModel $productModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productModel $productModel)
    {
        //
    }
}
