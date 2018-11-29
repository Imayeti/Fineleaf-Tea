<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
  public function index()
  {     $user = \Auth::user();
        $orders = $user->orders()->get();

        dd($orders);

        // if($userProducts){
        //     $user = \Auth::user();
        //     $userProductArray = $user->products;
            // dd($userProductArray);
  //build up my own array of the data called $temp by looping through by finding by id from the json
      //       $temp=array();
      //       foreach($userProductArray as $item){
      //         $product = \App\product::find($item['product']);
      //         $product->quantity = $item['quantity'];
      //         array_push($temp,  $product);
      //
      //       }
      //       $subtotal = 0;
      //       foreach ($temp as $product) {$subtotal += $product->price * $product->quantity;}
      //         // $userProducts = \DB::table('products')->whereIn('id', $userProductArray)->get();
      //       $total = $subtotal + 10;
      //     return view('pages.shopping_cart', compact('temp','subtotal','total','userProducts'));
      // }
      //
       return view('pages.orders', compact('orders'));
  }
}
