@extends('layout')

@section('title')
    Shopping Cart
@endsection

@section('content')
<h1>orders</h1>

@foreach ($orders as $order)

  <h2>{{$order->id}}</h2>
  @foreach ($order->createSingleOrder() as $singleOrderInfo)

  <ul>
    <li>{{ $singleOrderInfo }}</li>
  </ul>



  @endforeach
@endforeach











@endsection
