@extends('layout')

@section('title')
    Gift Details
@endsection
@section('content')
<div class="site-content">
<h1 class="text-center mt-5 ">Gift Details</h1>
<hr width="100px" class="center-block pb-5">



<table  id="t01"  class="table display-off-when-small">
  <tbody>
  <tr class="border-bottom">
    <th class="pl-5">PRODUCTS</th>
    <th class="pl-5"></th>

    <th></th>
    <th>PRICE</th>



  </tr>
  <tr class="border-bottom">
    <td >
        <a href="tea/{{$product->id}}"><image class="ml-4 mr-5 zero-margins "src="{{ $product->img_src }}" style="max-width:75px;"></a>
    </td>
    <td>
      <strong>{{ $product->name }}</strong>&nbsp -<span class="ml-1">{{ $product->short_description }}
    </td>
    <td></td>
    <td>${{ $product->price }}.00</td>


  </tr>



</tbody>
<tfoot>




  <tr>

    <th class="border-top-0"></th>
    <th class="border-top-0"></th>
    <th class="border-top-0">CART TOTALS</th>
    <th class="border-top-0"></th>


  </tr>
  <tr class="border-0">

    <th class="border-top-0"></th>

    <td class="border-top-0" >&nbsp</td>
    <td>SUBTOTAL</td>
    <td>${{$product->price}}.00 </td>

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
    <td>${{$product->price + 10}}.00</td>

  </tr>
</tfoot>

</table>
<div class="clearfix">
<form class="form-inline my-2 my-lg-0 float-right" method="post" action="/gifts/{{ $product->id }}">
    @method('PATCH')
    @csrf
    <label class="mr-3"for="findUser" >What is the email of the individual you want to send this gift to?</label>
    <input class="form-control mr-sm-2" name="email" type="search" id="findUser" placeholder="" aria-label="Search" required>
    <button type="submit" class="btn btn-light float-right mb-4 mr-2" >Gift it!</button>
</form>

</div>

</div>

@endsection
