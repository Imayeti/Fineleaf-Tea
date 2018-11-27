@extends('layout')

@section('title')
    {{ $teaware->name }}
@endsection

@section('content')



    <div class="row container-fluid pt-4" style="min-height:520px;">

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img class="center-block2 teapic" src="{{ $teaware->img_src }}" width="400px" alt="raw puer">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 teatext">


        <div class="pb-2">

        <h1 >{{ $teaware->name }}</h1>
        <p class="mr-2">{{ $teaware->full_description }}</p>
      </div>

      <div class=" pb-4">
        <hr width="80%" class="center-block ">
      </div>

      <div class="float-right clearfix text-align" style="font-size: 17px;">
        ${{ $teaware->price }}.00
        <form action="/shopping_cart/{{ $teaware->id }}" method="post"> @csrf @method('PUT')



          Quantity
          <input type="number" name="requestQuantity" min="1" max="50" value="1">

          <button type="submit" class="btn btn-light ml-5 mr-4 no-margin">Add To Cart</button>
        </form>
      </div>

      </div>
    </div>




@include('carousel')

@endsection
