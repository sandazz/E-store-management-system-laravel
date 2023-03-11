<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
        return view('users.admin.product.createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        products::create($request->all());
        return redirect()->route('user.admin.productView');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($products)
    {
        $product['details'] = products::find($products);
        return view('users.admin.product.showProduct')->with($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit( $products)
    {
        $product['details'] = products::find($products);
        return view('users.admin.product.updateProduct')->with($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $products)
    {
        $product = products::find($products);
        $product -> update($request->all());
        return redirect()->route('user.admin.productView');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy( $products)
    {
        $product = products::find($products);
        $product -> delete();
        return redirect()->route('user.admin.productView');
    }

    public function adminProduceView()
    {
        $response['products'] = products::all();
        return view('users.admin.product.productView')->with($response);
    }

    public function customerProduceView()
    {
        $response['products'] = products::all();
        return view('users.customer.productView')->with($response);
    }

    public function customerProductOrder(Request $request)
    {
        $product['details'] = products::find($request->id);
        $response['employees'] = UserDetails::all()->where('role','=','employee');
        return view('users.customer.productOrder')->with($product)->with($response);
    }
}
