@extends('layouts.app')
@section('title', $article->categories[0]['name'] . ' - ' . $article->seo_title)
@section('description', $article->seo_description)
@section('keyword', $article->keywords)
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
<section id="article">
  <article>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="article-header-title">
            <h1>{{ $article->title }}</h1>
            <p>Publicado por <strong>{{ $article->user->name }}</strong></p>
            <p>Date: <strong>{{ date('d/m/Y', strtotime($article->created_at)) }}</strong></p>
            <figure>
              <img class="img-responsive img-circle center-block" height="500" width="500" src="{{ asset('img/articles/' . $article->img_name) }}" alt="">
            </figure>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="article-body">
            {!! $article->body !!}
          </div>
        </div>
      </div>
    </div>
    <div class="article-recommended">
      <div class="container-fluid">
          <h2><span>RECOMMENDED ARTICLES</span></h2>
      </div>
      <div class="container">
        <div class="row">
          @foreach ($articleRecommended as $article)
          <div class="col-md-4">
            <a href="{{ route('showArticle',[$article->categories[0]['permalink'], $article->permalink]) }}">
              <figure>
              <img class="img-responsive img-thumbnail center-block" height="100" width="400" src="{{ asset('img/articles/'. $article->img_name) }}" alt="{{ $article->titl }}">
              </figure>
              <h3 class="text-center">{{ $article->title }}</h3>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </article>
</section>

<!-- Footer Section Start -->
@include('include.footer')
<!-- Footer Section End -->
@endsection