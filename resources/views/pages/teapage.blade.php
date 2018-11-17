@extends('layout')

@section('title')
    Sheng Puer
@endsection

@section('content')



    <div class="row container-fluid pt-4" style="min-height:520px;">

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img class="center-block2" src="images/rawpuer.jpg" width="400px" alt="raw puer">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 teatext">


        <div class="pb-2">

        <h1 >Sheng Puer</h1>
        <p class="mr-2">Pu'er traditionally begins as a raw product known as "rough" máochá (毛茶) and can be sold in this form or pressed into a number of shapes and sold as "raw" shēngchá (生茶). Both of these forms then undergo the complex process of gradual fermentation and maturation with time. The wòduī (渥堆) fermentation process developed in 1973 by the Kunming Tea Factory</p>
      </div>

      <div class=" pb-4">
        <hr width="80%" class="center-block ">
      </div>

      <div class="float-right">
        1 oz. - $15.00<button type="button" class="btn btn-light ml-5 mr-4">Add To Cart</button>
      </div>

      </div>
    </div>

<div class="container-fluid">
    <div class="row pt-5 pb-5">
      <div class=" col-md-6  col-xs-12 bg-primary  text-center">
        <h5 class="mt-5 mb-2">功夫Gong Fu Brewing</h5>
        <hr width="80%" class="center-block ">
        <table class="table mb-5">
          <tr>
            <td class="border-top-0"><img src="images/thermo.png" width="10px"></td>
            <td class="border-top-0"><img src="images/cropped-gaiwa.png" width="37px"></td>
            <td class="border-top-0"><img src="images/stopwatch.png" width="30px"></td>
            <td class="border-top-0"><img src="images/leafs.png" width="30px"></td>
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
            <td class="border-top-0"><img src="images/thermo.png" width="10px"></td>
            <td class="border-top-0"><img src="images/mug.png" width="37px"></td>
            <td class="border-top-0"><img src="images/stopwatch.png" width="30px"></td>
            <td class="border-top-0"><img src="images/leafs.png" width="30px"></td>
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



@include('carousel')

@endsection
