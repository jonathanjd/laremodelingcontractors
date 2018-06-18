@extends('layouts.app')
@section('title', 'Contractor Los Angeles - How To')
@section('description', 'Company Name - How To')
@section('keyword', 'How To')
@section('author', 'Company Name')
@section('content')

<!-- Toolbar Call Us Today Start -->
<div class="background-nopadding" style="background: #333">
  <div class="container">
    <p>
      <a href="#">Contractors Registration</a>
    </p>
  </div>
</div>
<!-- Toolbar Call Us Today End -->

<!-- Header Start -->
<div class="container">

  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <a href="/">
        <img class="logo" src="http://www.fititall.co/images/logo.png" alt="Logo">
      </a>
    </div>
    <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
      <div class="phone-style">
        <p>
          <a>1-323-894-9224</a>
          <br> Schedule an in-home design consultation
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Header End -->

<!-- NavBar Start -->
@include('include.navbar')
<!-- NavBar End -->

<!-- Blog Start -->
<section id="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="blog-header-title">How To</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">


    </div>
  </div>
</section>
<!-- Blog End -->
<!-- Footer Section Start -->
@include('include.footer')
<!-- Footer Section End -->
@endsection