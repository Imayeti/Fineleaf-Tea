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


    public function update(Request $request, $id)
    {

      $userProducts = \Auth::user()->products;

      //searching to find if the item is already in the gifts by looking through all products and seeing if the id mathes $id sent in request
      $found = "notfilled";
        for($i = 0; $i < count($userProducts); $i++){
          $product = $userProducts[$i];

            foreach($product as $key => $value) {
                if ($key == "product" && $value == $id) {
                    $found = $i;
                    break;
                  }
            }
        }


        //if the item is found in the products of the user already, just add the quantity selected to the quantity that is already on that product->quantity
          if ($found !== "notfilled" ) {
            //the array at the index of $found gets updated with new quantity
            $userProducts[$found]['quantity'] = $request->requestQuantity + $userProducts[$found]['quantity'];

            $user = \Auth::user();
            $user->products = $userProducts;
            $user->save();
            session()->flash('status', "Updated Quantity of item in Cart");
            return redirect('/tea/' . $id );
          };



          // otherwise, just push  the product with the quantity that is sent in the request to the end of the array
        array_push($userProducts,  ['product' => intval($id), 'quantity' => intval($request->requestQuantity)]);

        $user = \Auth::user();
        $user->products = $userProducts;

        $user->save();

        session()->flash('status', "Added to Cart");
        return redirect('/tea/' . $id );
    }
}
