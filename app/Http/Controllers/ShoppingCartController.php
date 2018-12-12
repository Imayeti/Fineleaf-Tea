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
          $cart = \Auth::user()->cart();


          $subtotal = \Auth::user()->subtotal();
                    // $userProducts = \DB::table('products')->whereIn('id', $userProductArray)->get();
          $total = \Auth::user()->total();

            return view('pages.shopping_cart', compact('cart','subtotal','total', 'userProducts'));
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $userProducts = \Auth::user()->products;


      //adds the array of items in cart to the order table
      $order = new \App\order;

      $order->user_id = \Auth::id();
      $order->order_products = $userProducts;



      $order->save();


      $user = \Auth::user();
      $user->products = [];
      $user->save();

      return view ('pages.thankyou');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      return view('pages.checkout', compact('id'));
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

      //searching to find if the item is already in the cart by looking through all products and seeing if the id mathes $id sent in request
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
