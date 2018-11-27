@extends('layout')

@section('title')
    Shopping Cart
@endsection

@section('content')



<h1 class="text-center mt-5 mb-5">Cart</h1>
<div class="fulldiv">

@if($userProducts)
  <table  id="t01"  class="table display-none">
    <tbody>
    <tr class="border-bottom">
      <th class="pl-5">PRODUCTS</th>
      <th>Qt.</th>

      <th>PRICE</th>
      <th>TOTAL</th>
      <th></th>
@foreach ($temp as $product)
    </tr>
    <tr class="border-bottom">
      <td >
        <image class="ml-4 mr-5 zero-margins"src="{{ $product->img_src }}" style="max-width:75px;">
        <strong>{{ $product->name }}</strong>&nbsp -<span class="ml-1">{{ $product->short_description }}
      </td>
      <td>
        <form action="/shopping_cart/{{ $product->id }}/edit" method="get">
            <input type="number" name="requestQuantity" min="1" max="50" value="{{ $product->quantity }}">
            <button type="submit" class="btn btn-light ml-5 mr-4 btn-sm no-margin">update</button>
        </form>
      </td>
      <td>${{ $product->price }}.00</td>
      <td>${{ $product->price * $product->quantity }}.00
      </td>
      <td>
        <form class="" action="/shopping_cart/{{ $product->id }}" method="post">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="button btn-sm btn btn-light btn-primary">x</button>
        </form>
      </td>
    </tr>
@endforeach


  </tbody>
<tfoot>




    <tr>
      <th class="border-top-0"></th>
      <th class="border-top-0"></th>
      <th class="border-top-0"></th>
      <th class="border-top-0">CART TOTALS</th>
      <th class="border-top-0">&nbsp</th>

    </tr>
    <tr class="border-0">
      <th class="border-top-0"></th>
      <th class="border-top-0"></th>

      <td class="border-top-0" >&nbsp</td>
      <td>SUBTOTAL</td>
      <td>${{$subtotal}}.00 </td>

    </tr>
    <tr>
      <th class="border-top-0"></th>
      <th class="border-top-0"></th>

      <td class="border-top-0">&nbsp</td>
      <td>SHIPPING</td>
      <td>$10.00</td>

    </tr>
    <tr>
      <th class="border-top-0"></th>
      <th class="border-top-0"></th>

      <td class="border-top-0">&nbsp</td>
      <td>TOTAL</td>
      <td>${{$total}}.00</td>

    </tr>
  </tfoot>

  </table>




  @foreach ($temp as $product)
      <div class="container-fluid row pb-2 display-on-small display-off-large">


        <div class="col-md-4 col-xs-8"><image class="ml-4 mr-5 zero-margins"src="{{ $product->img_src }}" style="max-width:75px;"><strong>{{ $product->name }}</strong>&nbsp -<span class="ml-1">{{ $product->short_description }}
        </div>


        <!-- <div class="col-md-2 col-xs-4"><form action="/shopping_cart/{{ $product->id }}/edit" method="get">

                <input type="number" name="requestQuantity" min="1" max="50" value="{{ $product->quantity }}">
                <button type="submit" class="btn btn-light ml-5 mr-4 btn-sm no-margin">apply</button>
            </form>
        </div>
        <div class="col-md-2 col-xs-4">${{ $product->price }}.00</div>
        <div class="col-md-2 col-xs-4">${{ $product->price * $product->quantity }}.00</div>
        <div class="col-md-2 col-xs-4">
                <form class="" action="/shopping_cart/{{ $product->id }}" method="post">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <button type="submit" class="button btn-sm btn btn-light btn-primary">DELETE</button>
                </form>
        </div> -->
      </div>



  @endforeach
  <div class="clearfix display-on-small display-off-large">

  <table class="border table mt-4 pb-4 mb-4  float-right">
        <tr>

  <th class="border-top-0">CART TOTALS</th>
  <th class="border-top-0">&nbsp</th>

  </tr>
  <tr class="">

  <td>SUBTOTAL</td>
  <td>${{$subtotal}}.00 </td>

  </tr>
  <tr>

  <td>SHIPPING</td>
  <td>$10.00</td>

  </tr>
  <tr>

  <td>TOTAL</td>
  <td>${{$total}}.00</td>

  </tr>
  </table>

</div>







<div class="clearfix">

  <button type="button" class="btn float-right mb-4 mr-2" >Proceed to Checkout</button>

</div>


</div>
@else
  <div class="fulldiv">

    <h1 class="text-center pt-5 pb-5 bg-primary">There is nothing in your cart</h1>
  </div>

@endif













@endsection
