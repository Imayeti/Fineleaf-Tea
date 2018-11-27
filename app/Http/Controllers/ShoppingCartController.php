<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


          $userProducts = \Auth::user()->products;

          if($userProducts){
              $user = \Auth::user();
              $userProductArray = $user->products;
              // dd($userProductArray);
    //build up my own array of the data called $temp by looping through by finding by id from the json
              $temp=array();
              foreach($userProductArray as $item){
                $product = \App\product::find($item['product']);
                $product->quantity = $item['quantity'];
                array_push($temp,  $product);

              }
              $subtotal = 0;
              foreach ($temp as $product) {$subtotal += $product->price * $product->quantity;}
                // $userProducts = \DB::table('products')->whereIn('id', $userProductArray)->get();
              $total = $subtotal + 10;
            return view('pages.shopping_cart', compact('temp','subtotal','total','userProducts'));
        }

        return view('pages.shopping_cart', compact('userProducts'));
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
      dd('store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {


      $userProducts = \Auth::user()->products;

      $found = null;
        for($i = 0; $i < count($userProducts); $i++){
          $product = $userProducts[$i];

            foreach($product as $key => $value) {
                if ($key == "product" && $value == $id) {
                    $found = $i;
                    break;
                  }
            }
        }

      $userProducts[$found]['quantity'] = $request->requestQuantity;

      $user = \Auth::user();
      $user->products = $userProducts;
      $user->save();

      session()->flash('status', "Item Quantity Updated");
      return redirect('/shopping_cart' );

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

      $userProducts = \Auth::user()->products;


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



          if ($found !== "notfilled" ) {

            $userProducts[$found]['quantity'] = $request->requestQuantity + $userProducts[$found]['quantity'];

            $user = \Auth::user();
            $user->products = $userProducts;
            $user->save();
            session()->flash('status', "Updated Quantity of item in Cart!");
            return redirect('/tea/' . $id );
          };

      // function arrayKeyValueSearch($array, $key, $value)
      //     {
      //         $results = array();
      //         if (is_array($array)) {
      //             if (isset($array[$key]) && $array[$key] == $value) {
      //                 $results[] = $array;
      //             }
      //             foreach ($array as $subArray) {
      //                 $results = array_merge($results, arrayKeyValueSearch($subArray, $key, $value));
      //             }
      //         }
      //         return $results;
      //     }
      //
      //
      //
      //     dd(arrayKeyValueSearch($userProducts, "product", 10));
      //





        array_push($userProducts,  ['product' => intval($id), 'quantity' => intval($request->requestQuantity)]);

        $user = \Auth::user();
        $user->products = $userProducts;

        $user->save();

        session()->flash('status', "Added to Cart!");
        return redirect('/tea/' . $id );





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //prevent user or have it change quantity of item that exists
      //php find by product id array find callback function pass in each item does it equal the product im looking for. then find the index of that item. then reomve item from array by index and resave the array in the database. php array functions.
      $userProducts = \Auth::user()->products;




      $found = null;
        for($i = 0; $i < count($userProducts); $i++){
          $product = $userProducts[$i];

            foreach($product as $key => $value) {
                if ($key == "product" && $value == $id) {
                    $found = $i;
                    break;
                  }
            }
        }




           array_splice($userProducts, $found, 1);




         $user = \Auth::user();
         $user->products = $userProducts;

         $user->save();



      session()->flash('status', "Item Deleted From Cart");
      return redirect ('/shopping_cart');

    }
}
