@extends('layout')

@section('title')
    Micah's Tea
@endsection

@section('content')




    <img src="images/tea-plant-fineleaf.jpg"  alt="china "  style="max-width: 100%;">






        <div class="row container mt-5 pt-3 pb-5" style=" margin: 0 auto;">

              <div class="col-3">
                <h3 class="text-center text-secondary pb-3 mt-2">White Tea</h3>
                <div class="card card-center border-none">
                  <a href="tea?type=whitetea"><img class="card-img-top" src="images/bai-mu-dan-white.jpg" alt="Card image cap"></a>
                  <div class="card-body">

                  </div>
                </div>
              </div>

              <div class="col-3">
                <h3  class="text-center text-secondary pb-3 mt-2">Green Tea</h3>

                <div class="card card-center">
                  <a href="tea?type=greentea"><img class="card-img-top" src="images/dragon-well.jpg" alt="Card image cap"></a>
                  <div class="card-body">

                  </div>
                </div>
              </div>

              <div class="col-3">
                <h3 class="text-center text-secondary  pb-3 mt-2">Black Tea</h3>

                <div class="card card-center">
                  <a href="tea?type=blacktea"><img class="card-img-top" src="images/black-tea-2.jpg" alt="Card image cap"></a>
                  <div class="card-body">

                  </div>
                </div>
              </div>

              <div class="col-3">
                <h3 class="text-center text-secondary  pb-3 mt-2">Puerh Tea</h3>

                <div class="card card-center">
                  <a href="tea?type=puerhtea"><img class="card-img-top" src="images/shengpuer3.jpg" alt="Card image cap"></a>
                  <div class="card-body">

                  </div>
                </div>
              </div>
            </div>






<div class="background-pic " style="height: 600px;">

<img class="center pt-5" src="images/tea-club3.jpg" style="max-width: 80%;">
</div>

<!-- <div class="bgimg faded-pic">
<img src="images/map.jpg" style="max-width: 100%">
</div> -->






@endsection
