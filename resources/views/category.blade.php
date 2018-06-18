@extends('layouts.app')
@section('title', 'Contractor Los Angeles - Blog')
@section('description', 'Company Name - Blog')
@section('keyword', 'Blog')
@section('author', 'Company Name')
@section('content')

<!-- Toolbar Call Us Today Start -->
@include('include.toolbarcallus')
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
        <h2 class="blog-header-title">Blog</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">

        @foreach ($categoryArticles as $article)
        <div class="row blog-article-item">
          <article>
            <div class="col-md-3">
              <figure>
                <img class="img-responsive" src="{{ asset('img/articles/' . $article->img_name) }}" alt="">
              </figure>
            </div>
            <div class="col-md-9">
              <a href="{{ route('showArticle',[$article->categories[0]['permalink'], $article->permalink]) }}"><h2>{{ $article->title }}</h2></a>
            <p>Publicado by <strong class="text-uppercase">{{ $article->user->name }}</strong></p>
            <p>Date: <strong>{{ date("d/m/Y", strtotime($article->created_at)) }}</strong></p>
              <div>
                {!! str_limit($article->body, 200) !!}
              </div>
              <p>
                <a href="{{ route('showArticle',[$article->categories[0]['permalink'], $article->permalink]) }}" class="btn btn-custom">Read More</a>
              </p>
            </div>
          </article>
        </div>
        @endforeach

        <div class="paginate">
          {{ $categoryArticles->links() }}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog End -->
<!-- Footer Section Start -->
@include('include.footer')
<!-- Footer Section End -->
@endsection