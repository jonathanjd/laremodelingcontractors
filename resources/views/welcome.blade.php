@extends('layouts.app') @section('title', 'Contractor Los Angeles - Remodeling: Kitchen, Bathroom, Home Additions In Los
Angeles') @section('content')

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

<!-- Header Start -->
@include('include.header')
<!-- Header End -->

<!-- Review Title Start -->
@include('include.reviewtitle')
<!-- Review Title -->

<!-- Why Choose Start -->
@include('include.whychoose')
<!-- Why Choose End -->

<!-- Do It YourSelf Start -->
@include('include.serviceestimates')
<!-- Do It YourSelf End -->


<!-- What Customers Are Saying Start -->
@include('include.whatcustomersaresaying')
<!-- What Customers Are Saying End -->

<!-- Do It YourSelf Start -->
@include('include.doityourself')
<!-- Do It YourSelf End -->

<!-- How It Works Start -->
@include('include.howitworks');
<!-- How It Works End -->

<!-- Blog Start -->
@include('include.blog');
<!-- Blog End -->

<!-- Footer Section Start -->
@include('include.footer')
<!-- Footer Section End -->
@endsection