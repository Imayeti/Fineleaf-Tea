@extends('layout')

@section('title')
    Micah's Tea
@endsection

@section('content')


<style>
      * {
          margin: 0;
          padding: 0;
      }
      .imgbox {
          display: grid;
          height: 100%;
      }
      .center-fit {
          max-width: 100%;
          max-height: 100vh;
          margin: auto;
      }
  </style>



<img src="images/tea-mountain.jpg" class="fadedPic imgbox center-fit" alt="china" >



@endsection
