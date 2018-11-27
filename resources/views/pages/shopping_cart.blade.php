@extends('layout')

@section('title')
    Shopping Cart
@endsection

@section('content')



<h1 class="text-center mt-5 mb-4">Cart</h1>
<div class="">

@if($userProducts)
  <table  id="t01"  class="table">
    <tbody>
    <tr class="border-bottom">
      <th class="pl-5">PRODUCTS</th>
      <th>Qt.</th>
      <th>PRICE</th>
      <th>TOTAL</th>
@foreach ($temp as $product)
    </tr>
    <tr class="border-bottom">
      <td ><image class="ml-4 mr-5 zero-margins"src="{{ $product->img_src }}" style="max-width:75px;"><strong>{{ $product->name }}</strong>&nbsp -<span class="ml-1">{{ $product->short_description }}</td>
      <td ><form action="/shopping_cart/{{ $product->id }}/edit" method="get">

              <input type="number" name="requestQuantity" min="1" max="50" value="{{ $product->quantity }}">
              <button type="submit" class="btn btn-light ml-5 mr-4 btn-sm no-margin">apply</button>
          </form>
      </td>
      <td>${{ $product->price }}.00</td>
      <td>${{ $product->price * $product->quantity }}.00
              <form class="" action="/shopping_cart/{{ $product->id }}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="button btn btn-primary">DELETE</button>
              </form>
      </td>
    </tr>
@endforeach


  </tbody>
<tfoot>




    <tr>
      <th class="border-top-0"></th>
      <th class="border-top-0"></th>
      <th class="border-top-0">CART TOTALS</th>
      <th class="border-top-0">&nbsp</th>

    </tr>
    <tr class="border-0">
      <th class="border-top-0"></th>

      <td class="border-top-0" >&nbsp</td>
      <td>SUBTOTAL</td>
      <td>${{$subtotal}}.00 </td>

    </tr>
    <tr>
      <th class="border-top-0"></th>

      <td class="border-top-0">&nbsp</td>
      <td>SHIPPING</td>
      <td>$10.00</td>

    </tr>
    <tr>
      <th class="border-top-0"></th>

      <td class="border-top-0">&nbsp</td>
      <td>TOTAL</td>
      <td>${{$total}}.00</td>

    </tr>
  </tfoot>

  </table>

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
