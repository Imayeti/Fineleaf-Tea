<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
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


  public function subtotal() {
    $subtotal = 0;
    foreach ($this->createSingleOrder() as $product) {
      $subtotal += $product->price * $product->quantity;
    }
    return $subtotal;
  }

  public function total() {
    $total = $this->subtotal() + 10;
    return $total;
  }

  public function prettyUpdate() {

        $dt = new Carbon($this->updated_at);
        if ($dt->isToday()) {
            return $dt->format('g:i:s a');
        }
        return $dt->format('n/j/y \\a\\t g:i:s a');

    }


}
