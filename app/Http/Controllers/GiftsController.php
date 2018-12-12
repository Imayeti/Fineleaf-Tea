<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftsController extends Controller
{
  public function index()
  {
    $userGifts = \Auth::user()->gifts;

    if($userGifts){
        $gifts = \Auth::user()->gifts();
        // dd($gifts);

          return view('pages.gifts', compact('gifts', 'userGifts'));
      }

      return view('pages.gifts', compact('userGifts'));
  }


    public function show( $id){
      $product = \App\product::find($id);

      return view ('pages.gift_details', compact('product'));

    }


    public function update(Request $request, $id)
    {

      $user = \App\User::where('email', $request->email)->first();
      if (!$user){
        session()->flash('status', "No User With That Email Exists");

        return redirect('/gifts/' . $id);
      }


      // dd($user);



      $userGifts = $user->gifts;
      array_push($userGifts, $id);
      $user->gifts = $userGifts;
      $user->save();

      return view('pages.gift_sent' );
      // dd($userGifts);



    }
}
