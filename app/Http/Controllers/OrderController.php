<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
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
        $user=Customer::all()->where('email','=',$_COOKIE['currentUser'])->first();
        error_log($user);
        $data=array(
            'employeeEmail'=>$request->get('employeeEmail'),
            'productName'=>$request->get('productName'),
            'detail'=>$request->get('detail'),
            'price'=>$request->get('price'),
            'customerName'=>$user->name,
            'customerAddress'=>$user->address,
            'customerMobile'=>$user->mobile,
            'date'=> date("Y/m/d")
        );
        $order=new Order($data);
        $order->save();

        return redirect()->route('showproductdetails2')->with('success', "Order successfull");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }
    public function showAll()
    {
        $order=Order::all()->where('employeeEmail','=',$_COOKIE['currentUser']);
        return view('employee.employeeorder', compact('order'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
