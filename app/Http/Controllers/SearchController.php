<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
      // $searchstring = $request->searchstring;
      $products = new \App\product;


      $searchArray = explode(' ', $request->searchstring);
      // dd($searchArray);
      $searchResultsArray = array();

      $searchValue = $request->searchstring;
        // array_push($searchResultsArray, $products->Where('name', 'LIKE', '%'.$searchValue.'%'));
       array_push($searchResultsArray, $products->where('name', 'ILIKE', '%'.$searchValue.'%')->orWhere('full_description', 'ILIKE', '%'.$searchValue.'%')->orWhere('type', 'ILIKE', '%'.$searchValue.'%')->orWhere('short_description', 'ILIKE', '%'.$searchValue.'%')->get());

      // dd($searchResultsArray);
      return view ('pages.searchresults', compact('searchResultsArray'));
    }
}
