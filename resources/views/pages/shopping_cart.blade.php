@extends('layout')

@section('title')
    Shopping Cart
@endsection

@section('content')



<h1 class="text-center mt-5 mb-4">Cart</h1>
<div class="">


  @for($i = 0; $i < count($userProductArray); $i++)
      <p>{{ $productTable->all()->where('id', $userProductArray[$i]) }}</p>

  @endfor

  <table  id="t01" align="right" class="table">
    <tbody>
    <tr class="border-bottom">
      <th class="pl-5">PRODUCTS</th>
      <th>&nbsp</th>
      <th>PRICE</th>

    </tr>
    <tr class="border-bottom">
      <td ><image class="ml-4 mr-5"src="images/Assam.jpg" style="max-width:75px;">Green Tea</td>
      <td ></td>
      <td>$15.00</td>

    </tr>
    <tr>
      <td ><image class="ml-4 mr-5"src="images/Assam.jpg" style="max-width:75px;">Black Tea</td>
      <td>Malty Dark Delicious</td>
      <td>$12.00</td>

    </tr>
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
      <td>$27.00</td>

    </tr>
    <tr>
      <td class="border-top-0">&nbsp</td>
      <td>SHIPPING</td>
      <td>$10.00</td>

    </tr>
    <tr>
      <td class="border-top-0">&nbsp</td>
      <td>TOTAL</td>
      <td>$37.00</td>

    </tr>
  </tfoot>

  </table>

  <button type="button" class="btn float-right mt-3 mr-3" >Proceed to Checkout</button>



</div>

@endsection
