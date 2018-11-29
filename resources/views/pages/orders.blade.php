@extends('layout')

@section('title')
    Shopping Cart
@endsection

@section('content')

@foreach ($orders as $order)
  <p>{{ $order }}</p>
@endforeach










@endsection
