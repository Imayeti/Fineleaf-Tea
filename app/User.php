<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'products' => 'array',
        'gifts' => 'array'

    ];



    public function orders() {
      return $this->hasMany('App\order');
    }

    public function cart() {
      // dd($this->products);

      $userProductArray = $this->products;
      // dd($userProductArray);
    //build up my own array of the data called $cart by looping through by finding by id from the json
      $cart=array();
      foreach($userProductArray as $item){
        $product = \App\product::find($item['product']);
        $product->quantity = $item['quantity'];
        array_push($cart,  $product);
      }

      return $cart;
    }

    public function subtotal() {
      $subtotal = 0;
      foreach ($this->cart() as $product) {
        $subtotal += $product->price * $product->quantity;
      }
      return $subtotal;
    }

    public function total() {
      $total = $this->subtotal() + 10;
      return $total;
    }

    public function gifts() {
      // dd($this->products);

      $userGiftArray = $this->gifts;
      // dd($userGiftArray);
     //build up my own array of the data called $gifts by looping through by finding by id from the json
      $gifts=array();
      foreach($userGiftArray as $item){
        $gift = \App\product::find($item);
        array_push($gifts,  $gift);
      }
      return $gifts;
    }



}
