<section id="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @foreach ($categories as $category)
          <div class="col-md-12">
            <div class="title-blog">
              <a href="{{ route('myCategory', $category->permalink) }}">
                <h1 class="text-center">{{ $category->name }}</h1>
              </a>
            </div>
            @foreach ($category->articles as $article)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="blog-title">
                <ul>
                  <li style="list-style: circle;">
                    <h4 style="margin: 0px; font-size: 15px; font-weight: bold; font-style: normal;">
                      <a href="{{ route('showArticle', [$article->categories[0]->permalink, $article->permalink]) }}">{{ $article->title }}</a>
                    </h4>
                  </li>
                </ul>
              </div>
            </div>
            @endforeach
          </div>
          @endforeach
      </div>
    </div>
  </div>
</section>