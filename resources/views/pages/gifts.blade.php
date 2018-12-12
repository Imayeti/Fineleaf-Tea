@extends('layout')

@section('title')
    Gifts
@endsection
@section('content')

<h1 class="text-center mt-5 ">Gifts</h1>
<hr width="100px" class="center-block pb-5">
@foreach ($gifts as $gift){
  {{ $gift->name }}
}
@endforeach
@endsection
