<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
    {

      $teas = new \App\product;

      $teas = $teas->all();

  return view('pages.tea_choice', compact('teas'));
}

public function show($id)
  {

  }

}
