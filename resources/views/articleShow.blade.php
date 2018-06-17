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

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <article>
          <div class="col-md-3">
            <figure>
              <img class="img-responsive img-thumbnail" src="{{ asset('img/articles/' . $article->img_name) }}" alt="">
            </figure>
          </div>
          <div class="col-md-9">
            <a href="{{ route('showArticle',[$article->categories[0]->permalink, $article->permalink]) }}"><h2>{{ $article->title }}</h2></a>
          <p>Publicado por {{ $article->user->name }}</p>
            <div>
              {!! $article->body !!}
            </div>

          </div>
        </article>
      </div>
    </div>
  </div>
</div>

<!-- Footer Section Start -->
@include('include.footer')
<!-- Footer Section End -->
@endsection