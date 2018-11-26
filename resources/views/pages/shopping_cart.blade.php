@extends('layout')

@section('title')
    Shopping Cart
@endsection

@section('content')



<h1 class="text-center mt-5 mb-4">Cart</h1>
<div class="">


  <table  id="t01" align="right" class="table">
    <tbody>
    <tr class="border-bottom">
      <th class="pl-5">PRODUCTS</th>
      <th>QUANTITY</th>
      <th>PRICE</th>
      <th>TOTAL</th>
@foreach ($temp as $product)
    </tr>
    <tr class="border-bottom">
      <td ><image class="ml-4 mr-5"src="{{ $product->img_src }}" style="max-width:75px;">{{ $product->name }}&nbsp&nbsp-&nbsp&nbsp{{ $product->short_description}}</td>
      <td >{{ $product->quantity }}</td>
      <td>${{ $product->price }}.00</td>
      <td>${{ $product->price * $product->quantity }}.00</td>
    </tr>
@endforeach


  </tbody>
<tfoot>




    <tr>
      <th class="border-top-0"></th>
      <th class="border-top-0">CART TOTALS</th>
      <th class="border-top-0">&nbsp</th>

    </tr>
    <tr class="border-0">
      <td class="border-top-0" >&nbsp</td>
      <td>SUBTOTAL</td>
      <td>${{$subtotal}}.00 </td>

    </tr>
    <tr>
      <td class="border-top-0">&nbsp</td>
      <td>SHIPPING</td>
      <td>$10.00</td>

    </tr>
    <tr>
      <td class="border-top-0">&nbsp</td>
      <td>TOTAL</td>
      <td>${{$total}}.00</td>

    </tr>
  </tfoot>

  </table>

  <button type="button" class="btn float-right mt-3 mr-3" >Proceed to Checkout</button>



</div>

@endsection
