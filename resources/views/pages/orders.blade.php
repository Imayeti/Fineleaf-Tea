@extends('layout')

@section('title')
    Orders
@endsection

@section('content')
<div class="site-content">

<h1 class="text-center mt-5 ">Orders</h1>
<hr width="100px" class="center-block pb-5">

@foreach ($orders as $order)

  <h2 class="pt-2 mt-3 pl-4 pb-2 mb-2 bg-primary">order created {{$order->prettyUpdate()}}</h2>


  <table  id="t01"  class="table display-off-when-small ">
    <tbody>
    <tr class="border-bottom">
      <th class="pl-5">PRODUCTS</th>
      <th class="pl-5"></th>
      <th>Qt.</th>

      <th >PRICE</th>
      <th>TOTAL</th>

  @foreach ($order->createSingleOrder() as $singleOrderInfo)

    </tr>
    <tr class="border-bottom">
      <td >
        <a href="tea/{{$singleOrderInfo->id}}"><image class="ml-4 mr-5 zero-margins "src="{{ $singleOrderInfo->img_src }}" style="max-width:75px;"></a>
      </td>
      <td>
        <strong>{{ $singleOrderInfo->name }}</strong>
      </td>
      <td>
      {{ $singleOrderInfo->quantity }}
      </td>
      <td>
        ${{ $singleOrderInfo->price }}.00
      </td>
      <td>
        ${{ $singleOrderInfo->price * $singleOrderInfo->quantity }}.00
      </td>

    </tr>








  @endforeach


    </tbody>
  <tfoot>




      <tr>
        <th class="border-top-0"></th>
        <th class="border-top-0"></th>
        <th class="border-top-0"></th>
        <th class="border-top-0">ORDER TOTALS</th>
        <th class="border-top-0">&nbsp</th>

      </tr>
      <tr class="border-0">
        <th class="border-top-0"></th>
        <th class="border-top-0"></th>

        <td class="border-top-0" >&nbsp</td>
        <td>SUBTOTAL</td>

        <td>${{ $order->subtotal() }}.00 </td>

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
        <td>${{ $order->total() }}.00 </td>

      </tr>
    </tfoot>

    </table>
<!-- <hr class="thick-hr"> -->
@endforeach


</div>








@endsection
