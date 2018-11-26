<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




          $user = \Auth::user();
          $userProductArray = $user->products;
          // dd($userProductArray);
//build up my own array of the data called $temp by looping through by finding by id from the json
          $temp=array();
          foreach($userProductArray as $item){
            $product = \App\product::find($item['product']);
            $product->quantity = $item['quantity'];
            array_push($temp,  $product);

          }
          $subtotal = 0;
          foreach ($temp as $product) {$subtotal += $product->price * $product->quantity;}
            // $userProducts = \DB::table('products')->whereIn('id', $userProductArray)->get();
          $total = $subtotal + 10;
        return view('pages.shopping_cart', compact('temp','subtotal','total'));
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
