@extends('layout')

@section('title')
    Shopping Cart
@endsection

@section('content')


<div class="site-content">

<h1 class="text-center mt-5 ">Cart</h1>
<hr width="100px" class="center-block pb-5">

@if($userProducts)
  <table  id="t01"  class="table display-off-when-small">
    <tbody>
    <tr class="border-bottom">
      <th class="pl-5">PRODUCTS</th>
      <th class="pl-5"></th>
      <th>Qt.</th>

      <th>PRICE</th>
      <th>TOTAL</th>
      <th></th>
@foreach ($temp as $product)
    </tr>
    <tr class="border-bottom">
      <td >
        <image class="ml-4 mr-5 zero-margins "src="{{ $product->img_src }}" style="max-width:75px;">
      </td>
      <td>
        <strong>{{ $product->name }}</strong>&nbsp -<span class="ml-1">{{ $product->short_description }}
      </td>
      <td>
        <form action="/shopping_cart/{{ $product->id }}/edit" method="get">
            <input type="number" name="requestQuantity" min="1" max="50" value="{{ $product->quantity }}">
            <button type="submit" class="btn btn-light ml-3 btn-sm ">update</button>
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
      <div class=" row pb-2 display-on-when-small display-off-when-large text-center">

        <div class="col-md-4 col-xs-8">

          <image class=""src="{{ $product->img_src }}" style="max-width:75px;">
          <div class="inline">

            <strong>{{ $product->name }}</strong>&nbsp -<span class="ml-1">{{ $product->short_description }}</span>
          </div>
          <div class="">
            quantity - <span class="mr-4">{{ $product->quantity }}</span>
            total  <span class="ml-2">${{ $product->price * $product->quantity }}.00</span>
          </div>
          <form class="mb-4" action="/shopping_cart/{{ $product->id }}" method="post">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="button btn-sm btn btn-light btn-light mt-2 mb-2">remove</button>
          </form>
        </div>
      </div>



  @endforeach
  <div class="clearfix display-on-when-small display-off-when-large">

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
    <form class="" action="/shopping_cart/{{ $total }}" method="get">
      @csrf

      <button type="submit" class="btn float-right mb-4 mr-2" >Proceed to Checkout</button>
    </form>

</div>


</div>
@else
  <div class="fulldiv">

    <h4 class="text-center mt-3 mb-3 pt-3 pb-3 bg-primary">There is nothing in your cart</h4>
  </div>

@endif













@endsection
