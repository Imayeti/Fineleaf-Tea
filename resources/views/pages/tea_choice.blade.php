@extends('layout')

@section('title')

    Black Tea
@endsection

@section('content')



<h1 class="text-center mt-5">{{ $teatype }}</h1>
<hr width="100px" class="center-block pb-5">



<div class="row container " style=" margin: 0 auto;">
  @foreach($teas as $tea)

      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-5">
        <div class="card card-center border-none">
          <a href="tea/{{$tea->id}}"><img class="card-img-top" src="{{ $tea->img_src }}" alt="{{ $tea->short_description }}"></a>
          <div class="card-body">
            <p class="card-text text-center">{{ $tea->name }}</p>
          </div>
        </div>
        <div class="mb-3 text-center">
          {{ $showoz == "yes" ? "2 oz.  -" : ""}}${{ $tea->price }}.00
        </div>
        <div class="center-button">

            <a href="tea/{{$tea->id}}"><button  class="btn btn-light">Purchase</button></a>


        </div>
      </div>


      @endforeach

</div>

<!--
<div class="row container " style=" margin: 0 auto;">

      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

        <div class="card card-center">
          <img class="card-img-top" src="images/Golden-Monkey-Black.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">golden monkey black tea</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="card card-center">
          <img class="card-img-top" src="images/Golden-Monkey-Black.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">golden monkey black tea</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="card card-center">
          <img class="card-img-top" src="images/Golden-Monkey-Black.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">golden monkey black tea</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="card card-center">
          <img class="card-img-top" src="images/Gyokuro.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">golden monkey black tea</p>
          </div>
        </div>
      </div>
</div>  -->

<hr width="50%" class="center-block mt-3 mb-3">


<div class="row container " style=" margin: 0 auto;">

      @include('carousel')
</div>





@endsection
