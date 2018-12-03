@extends('layout')

@section('title')
    {{ $tea->name }}
@endsection

@section('content')



    <div class="row container-fluid pt-4" style="min-height:520px;">

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img class="center-block2 teapic" src="{{ $tea->img_src }}" width="400px" alt="raw puer">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 teatext">


        <div class="pb-2">

        <h1 >{{ $tea->name }}</h1>
        <p class="mr-2">{{ $tea->full_description }}</p>
      </div>

      <div class=" pb-4">
        <hr width="80%" class="center-block ">
      </div>

      <div class="float-right clearfix text-align" >
        <form action="/shopping_cart/{{ $tea->id }}" method="post"> @csrf @method('PUT')

          ${{ $tea->price }}.00

          <span class="ml-5">Quantity</span>
          <input type="number" name="requestQuantity" min="1" max="50" value="1">

          <button type="submit" class="btn btn-light ml-5 mr-4 no-margin">Add To Cart</button>
        </form>
      </div>

      </div>
    </div>
@if ($tea->type != 'teaware')
<div class="container-fluid">
    <div class="row pt-5 pb-5">
      <div class=" col-md-6  col-xs-12 bg-primary  text-center">
        <h5 class="mt-5 mb-2">功夫Gong Fu Brewing</h5>
        <hr width="80%" class="center-block ">
        <table class="table mb-5">
          <tr>
            <td class="border-top-0"><img src="/images/thermo.png" width="10px"></td>
            <td class="border-top-0"><img src="/images/cropped-gaiwa.png" width="37px"></td>
            <td class="border-top-0"><img src="/images/stopwatch.png" width="30px"></td>
            <td class="border-top-0"><img src="/images/leafs.png" width="30px"></td>
          </tr>
          <tr>
            <th class="border-top-0">Water Temp</th>
            <th class="border-top-0">Amount</th>
            <th class="border-top-0">Brewing Time</th>
            <th class="border-top-0">Infusion</th>
          </tr>
          <tr>
            <td class="border-top-0">195°F</td>
            <td class="border-top-0">4 oz. per 100ml</td>
            <td class="border-top-0">15 sec</td>
            <td class="border-top-0">7</td>
          </tr>
        </table>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bg-primary text-center">
        <h5 class="mt-5">Western Brewing</h5>
        <hr width="80%" class="center-block ">
        <table class="table">
          <tr>
            <td class="border-top-0"><img src="/images/thermo.png" width="10px"></td>
            <td class="border-top-0"><img src="/images/mug.png" width="37px"></td>
            <td class="border-top-0"><img src="/images/stopwatch.png" width="30px"></td>
            <td class="border-top-0"><img src="/images/leafs.png" width="30px"></td>
          </tr>
          <tr>
            <th class="border-top-0">Water Temp</th>
            <th class="border-top-0">Amount</th>
            <th class="border-top-0">Brewing Time</th>
            <th class="border-top-0">Infusion</th>
          </tr>
          <tr>
            <td class="border-top-0">195°F</td>
            <td class="border-top-0">1 oz. per 100ml</td>
            <td class="border-top-0">130 sec</td>
            <td class="border-top-0">3</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
@endif

<h3 class="text-center mt-5">You May Also Be Interested In</h3>
<hr width="80%" class="center-block ">




    <div class="row container " style=" margin: 0 auto;">
      @foreach($randomProducts as $product)

          <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mt-5">
            <div class="card card-center border-none">
              <a href="tea/{{$product->id}}"><img class="card-img-top" src="{{ $product->img_src }}" alt="{{ $product->short_description }}"></a>
              <div class="card-body">
                <p class="card-text text-center">{{ $product->name }}</p>
              </div>
            </div>
            <div class="mb-3 text-center">
               ${{ $product->price }}.00
            </div>
            <div class="center-button">

                <a href="tea/{{$product->id}}"><button class="btn btn-light">Purchase</button></a>


            </div>
          </div>


          @endforeach

    </div>
    <hr width="80%" class="center-block ">
    


@include('carousel')

@endsection
