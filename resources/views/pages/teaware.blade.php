@extends('layout')

@section('title')

    Teaware
@endsection

@section('content')



<h1 class="text-center mt-5 ">Teaware</h1>
<hr width="100px" class="center-block pb-5">








  <div class="row container " style=" margin: 0 auto;">
    @foreach($teaware as $item)

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-5">
          <div class="card card-center border-none">
            <a href="teaware/{{$item->id}}"><img class="card-img-top" src="{{ $item->img_src }}" alt="{{ $item->short_description }}"></a>
            <div class="card-body">
              <p class="card-text text-center">{{ $item->name }}</p>
            </div>
          </div>
          <div class="mb-3 text-center">
             ${{ $item->price }}.00
          </div>
          <div class="center-button">

              <a href="teaware/{{$item->id}}"><button class="btn btn-light">Purchase</button></a>


          </div>
        </div>


        @endforeach

  </div>






<hr width="50%" class="center-block mt-3 mb-3">




<div class="container col-lg-6 col-md-8 col-sm-10 col-xs-10 pt-5 pb-5">
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





@endsection
