<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
  public function user() {
    return $this->belongsTo('App\User');
}

  protected $casts = [
      'order_products' => 'array'
  ];

  public function getOrdersCollection() {
    // dd($this->products);
    $orderscollection = \Auth::user()->orders()->orderBy('updated_at', 'desc')->get();
    return $orderscollection;
  }


  public function createSingleOrder() {

      $order=array();
      foreach($this->order_products as $item){
        $product = \App\product::find($item['product']);
        $product->quantity = $item['quantity'];
        array_push($order,  $product);
      }

      return $order;
  }

    // dd($userProductArray);
  //build up my own array of the data called $temp by looping through by finding by id from the json



  public function subtotal() {
    $subtotal = 0;
    foreach ($this->cart() as $product) {
      $subtotal += $product->price * $product->quantity;
    }
  }

  public function total() {
    $total = $this->subtotal() + 10;
  }
}
