@extends('layout')

@section('title')
    Micah's Tea
@endsection

@section('content')




    <img src="images/tea-plant-fineleaf.jpg"  alt="china "  style="max-width: 100%;">






        <div class="row container mt-5 pb-5" style=" margin: 0 auto;">

              <div class="col-3">
                <h3 class="text-center text-secondary pb-3 mt-2">White Tea</h3>
                <div class="card card-center border-none">
                  <img class="card-img-top" src="images/bai-mu-dan-white.jpg" alt="Card image cap">
                  <div class="card-body">

                  </div>
                </div>
              </div>

              <div class="col-3">
                <h3  class="text-center text-secondary pb-3 mt-2">Green Tea</h3>

                <div class="card card-center">
                  <img class="card-img-top" src="images/dragon-well.jpg" alt="Card image cap">
                  <div class="card-body">

                  </div>
                </div>
              </div>

              <div class="col-3">
                <h3 class="text-center text-secondary  pb-3 mt-2">Black Tea</h3>

                <div class="card card-center">
                  <img class="card-img-top" src="images/black-tea-2.jpg" alt="Card image cap">
                  <div class="card-body">

                  </div>
                </div>
              </div>

              <div class="col-3">
                <h3 class="text-center text-secondary  pb-3 mt-2">Puerh Tea</h3>

                <div class="card card-center">
                  <img class="card-img-top" src="images/shengpuer3.jpg" alt="Card image cap">
                  <div class="card-body">

                  </div>
                </div>
              </div>
            </div>


            <!-- <div class="jumbotron bg-white">
              <div class="container">
                <h1 class="display-4 text-center">Top Quality Tea To Your Doorstep</h1>

                <p class="lead text-center">No Frills, Just The Good Stuff</p>
              </div>
            </div> -->


<div class="bgimg">
  <!-- <h3 class="text-center  pt-5">We Think You Will Love:</h3> -->
  <div class="container col-lg-6 col-md-8 col-sm-10 col-xs-10 pt-5 mb-5 mt-5 pb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/Gong-fu.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/carousel-gaiwan.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/gongfuset_1.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>


<div class="bgimg">
<img src="images/map.jpg" style="max-width: 100%">
</div>






@endsection
