<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $type = $request->fullUrl();

      if (strpos($type, 'blacktea') !== false) {
        $teatype = "Black Tea";
        $teas = new \App\product;
        $teas = $teas->all()->where('type', 'blacktea');
        return view('pages.tea_choice', compact('teas','teatype'));

      }elseif(strpos($type, 'greentea') !== false) {
        $teatype = "Green Tea";
        $teas = new \App\product;
        $teas = $teas->all()->where('type', 'greentea');
        return view('pages.tea_choice', compact('teas', 'teatype'));

      }elseif(strpos($type, 'puerhtea') !== false) {
        $teatype = "Puerh";
        $teas = new \App\product;
        $teas = $teas->all()->where('type', 'puerhtea');
        return view('pages.tea_choice', compact('teas','teatype'));

      }elseif(strpos($type, 'whitetea') !== false) {
        $teatype = "White Tea";
        $teas = new \App\product;
        $teas = $teas->all()->where('type', 'whitetea');
        return view('pages.tea_choice', compact('teas','teatype'));
      }
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
      //test

      $tea = \App\product::find($id);



      return view('pages.teapage', compact('tea'));



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
