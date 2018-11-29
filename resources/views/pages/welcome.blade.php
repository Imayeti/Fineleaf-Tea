@extends('layout')

@section('title')
    Fineleaf Tea
@endsection

@section('content')




    <img class="mb-4 display-off-when-small "src="images/tea-plant-fineleaf.jpg "  alt="china "  style="max-width: 100%;">
    <img class="mb-4 display-off-when-large display-on-when-small "src="images/fineleafmobile.png "  alt="china "  style="max-width: 100%;">

    <div class="row container mt-5 pt-5 pb-5" style=" margin: 0 auto;">
      <div class="col-md-3 col-xs-4">
        <a href="tea?type=whitetea"><h3 class="text-center text-secondary pb-3 mt-2">White Tea</h3></a>
        <div class="card card-center border-none">
          <a href="tea?type=whitetea"><img class="card-img-top" src="images/whitetea/bai-mu-dan-white.jpg" alt="Card image cap"></a>
          <div class="card-body">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-4">
        <a href="tea?type=greentea"><h3  class="text-center text-secondary pb-3 mt-2">Green Tea</h3></a>
        <div class="card card-center">
          <a href="tea?type=greentea"><img class="card-img-top" src="images/greentea/dragon-well.jpg" alt="Card image cap"></a>
          <div class="card-body">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-4">
        <a href="tea?type=blacktea"><h3 class="text-center text-secondary  pb-3 mt-2">Black Tea</h3></a>
        <div class="card card-center">
          <a href="tea?type=blacktea"><img class="card-img-top" src="images/blacktea/black-tea-2.jpg" alt="Card image cap"></a>
          <div class="card-body">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-4">
        <a href="tea?type=puerhtea"><h3 class="text-center text-secondary  pb-3 mt-2">Puerh Tea</h3></a>
        <div class="card card-center">
          <a href="tea?type=puerhtea"><img class="card-img-top" src="images/puerhtea/shengpuer3.jpg" alt="Card image cap"></a>
          <div class="card-body">
          </div>
        </div>
      </div>
    </div>






<img class=" pt-5 display-off-when-small" src="images/mapwithteaclub.jpg" style="max-width: 100%;">
<img class=" pt-5 display-on-when-small display-off-when-large" src="images/teaclubmobile.png" style="max-width: 100%;">







@endsection
