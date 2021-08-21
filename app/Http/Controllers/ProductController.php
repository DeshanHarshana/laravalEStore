<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Product;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required'
        ]);

        $product=new Product([
            'name'=>$request->get('name'),
            'detail'=>$request->get('detail'),
            'price'=>$request->get('price')
        ]);
        $product->save();
        return redirect()->route('showproductdetails')->with('success', "product add");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.viewProduct', compact('product'));
    }
    public function show2(){
        $product=Product::all();
        return view('customer.placeorder', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function showoneproduct(Product $product){
        $employee=Employee::all();
        //$data=[$product, $employee];
        return view('customer.giveplaceOrder', compact('product','employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.editproduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        $product->update($request->all());
       return redirect()->route('showproductdetails')->with('success','Product update Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        error_log("product id " . $product->id);
        $product -> delete();
        return redirect()->route('showproductdetails')->with('success', "Product Delete SuccessFully");
    }
}
