@extends('layouts.main')

@section('navHome', 'active')

@section('title','Home')

@section('content')


<div id="carouselExampleFade" class="carousel slide carousel-fade w-auto">
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="/images/1.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/4.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

@endsection