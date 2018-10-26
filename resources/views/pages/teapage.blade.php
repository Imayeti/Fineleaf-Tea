@extends('layout')

@section('title')
    Sheng Puer
@endsection

@section('content')


    <div class="row container-fluid" style="height:600px;">

      <div class=" col ">
        <img class="center-block2" src="images/rawpuer.jpg" width="400px" alt="raw puer">
      </div>

      <div class="col teatext" >
        <h1>Sheng Puer</h1>
        Pu'er traditionally begins as a raw product known as "rough" máochá (毛茶) and can be sold in this form or pressed into a number of shapes and sold as "raw" shēngchá (生茶). Both of these forms then undergo the complex process of gradual fermentation and maturation with time. The wòduī (渥堆) fermentation process developed in 1973 by the Kunming Tea Factory created a new type of pu'er tea. This process involves an accelerated fermentation into "ripe" shóuchá (熟茶) which is then stored loose or pressed into various shapes.
      </div>

    </div>
      <div class="" style="height:600px; background-color: #ceffff;">
    </div>

    <div id="carouselExampleControls" class="carousel slide" width="200px" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/Black-Tea.jpg" width="200px" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/Jasmine-Green.jpg" width="200px" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/Assam.jpg" width="200px" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



@endsection
