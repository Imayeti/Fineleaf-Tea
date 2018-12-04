<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request) {


      $review = new \App\review;
      $review->product_id = $request->productid;
      $review->review = $request->review;
      $review->user_name = \Auth::user()->name;
      $review->stars = $request->stars;

      $review->save();



      session()->flash('status', "Thank You For Your Review");
      return redirect ('/tea/' . $request->productid);


    }
    public function index() {
      dd('index');
    }


}
