<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
  public function index()
  {
        $orders = $orderscollection = \Auth::user()->orders()->orderBy('updated_at', 'desc')->get();

       return view('pages.orders', compact('orders'));
  }
}
