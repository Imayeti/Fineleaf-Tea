<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeawareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $teaware = new \App\product;
      $teaware = $teaware->all()->where('type', 'teaware');
      return view('pages.teaware', compact('teaware'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $tea= \App\product::find($id);



      $randomProducts = array();

      function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
      }

      $fourRandomNumbers = UniqueRandomNumbersWithinRange(1, 40, 4);


      foreach ($fourRandomNumbers as $randomNumber){
        array_push($randomProducts, \App\product::find($randomNumber));
      }


      $reviews = new \App\review;
      $reviews = $reviews->where('product_id', $id)->get();

      if($reviews->count() > 0){
          $allStars = array();
          foreach($reviews as $review){
          array_push($allStars, $review->stars);
          }
          $averageOfStars = ceil(array_sum($allStars)/count($allStars));
      }else{
        $averageOfStars = 0;
      }
      return view('pages.teapage', compact('tea','randomProducts', 'reviews', 'averageOfStars'));

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
