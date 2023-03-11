<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\products;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class OrdersController extends Controller
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

        $product = products::find($request->productId);
        $employee = UserDetails::find($request->employeeId);


        $order = new orders;
        $order->productName = $product->name;
        $order->detail = $product->detail;
        $order->price = $product->price;

        $order->customerName = $employee->name;
        $order->customerAddress = $employee->address;
        $order->customerMobile = $employee->mobile;



        // add more fields as necessary
        $order->save();
        return redirect()->route('user.customer.productView');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(orders $orders)
    {
        //
    }

    public function employeeOrderView()
    {
        $response['orders'] = orders::all();
        return view('users.employee.orderView')->with($response);
    }
}
