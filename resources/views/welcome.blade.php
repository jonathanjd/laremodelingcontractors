@extends('layouts.app') @section('title', 'Contractor Los Angeles - Remodeling: Kitchen, Bathroom, Home Additions In Los
Angeles') @section('content')

<!-- Toolbar Call Us Today Start -->
<div class="background-nopadding">
  <div class="container">
    <p>Call Us Today! 1-323-894-9224 |
      <a>info@fititall.co</a>
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
<div class="top-navbar">
  <div class="navbar navbar-styles navbar-static-top" style="margin-bottom: 0px;">

    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
      <!-- class="navbar-header" -->

      <div class="collapse navbar-collapse">

        <ul class="nav navbar-nav navbar-left custom-navbar">

          <li class="active">
            <a href="/">HOME</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CLOSETS
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="custom-closets">CUSTOM CLOSETS</a>
              </li>
              <li>
                <a href="walk-in-closets">WALK - IN CLOSETS</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DOORS
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="sliding-doors">SLIDING CLOSET DOORS</a>
              </li>
              <li>
                <a href="bifold-closets">BIFOLD CLOSET DOORS</a>
              </li>
              <li>
                <a href="room-dividers">ROOM DIVIDERS</a>
              </li>

            </ul>
          </li>
          <li>
            <a href="#">CABINETS</a>
          </li>
          <li>
            <a href="pantry">PANTRY</a>
          </li>
          <li>
            <a href="furniture">FURNITURE</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BEDS
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="wall-beds">WALL BEDS</a>
              </li>
              <li>
                <a href="kids-beds">KIDS BEDS</a>
              </li>
            </ul>
          </li>

        </ul>

      </div>
      <!-- class="collapse navbar-collapse" -->

    </div>
    <!-- class="container" -->

  </div>
  <!--  class="navbar navbar-default" -->

</div>

<!-- NavBar End -->

<!-- Carrousel Start -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Indicators Start -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
          <!-- Indicators End -->

          <!-- Wrapper for slides Start-->
          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <img src="{{ asset('img/slide1.jpg.jpeg') }}" class="img-responsive">
              <div class="container">
                <div class="carousel-caption">
                </div>
              </div>
            </div>
            <div class="item">
              <img src="{{ asset('img/slide2.jpg.jpeg') }}" class="img-responsive">
              <div class="container">
                <div class="carousel-caption">
                  <p>Together we'll create the closet of your dreams</p>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="{{ asset('img/slide3.jpg.jpeg') }}" class="img-responsive">
              <div class="container">
                <div class="carousel-caption">
                  <p>Custom closets designed to make you happy!</p>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="{{ asset('img/slide4.jpg.jpeg') }}" class="img-responsive">
              <div class="container">
                <div class="carousel-caption">
                  <p>We build custom closets personalized just for you!</p>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="{{ asset('img/slide5.jpg.jpeg') }}" class="img-responsive">
              <div class="container">
                <div class="carousel-caption">

                </div>
              </div>
            </div>
          </div>
          <!-- Wrapper for slides End-->

          <!-- Controls Start -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!-- Controls End -->
        </div>
      </div>
      <!-- .col-sm-12 -->
    </div>
    <!-- .row -->
  </div>
  <!-- .container -->


</section>
<!-- Carrousel End -->


<section>
  <div class="container">
    <div class="row">
      <h1 class="reviews-title">WE ARE LOS ANGELES
        <span>MOST TRUSTED</span> CLOSET DESIGNERS SINCE 1998
      </h1>
      <br>
    </div>
    <div class="row">
      <p class="reviews-paragraph">Call today and schedule your free consultation with one of our award winning closet designers. 1-323-894-9224</p>
    </div>
    <div class="row" style="margin-top: 30px; margin-bottom: 30px">
      <hr class="separator">
      <hr class="separator">
    </div>
  </div>
</section>
<section id="info-section-md">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
      <img style="width: 100%" src="{{ asset('img/design1.jpg.jpeg') }}" alt="COLLABORATION">
        <p style="text-align: center;">
          <span style="color: #d10808;">
            <strong>COLLABORATION</strong>
          </span>
        </p>
        <p class="info-paragraph">An exceptional result is achieved when the client and interior designer collaborate from the beginning of the project.</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <img style="width: 100%" src="{{ asset('img/design2.jpg.jpeg') }}" alt="CRAFTSMANSHIP">
        <p style="text-align: center;">
          <span style="color: #d10808;">
            <strong>CRAFTSMANSHIP</strong>
          </span>
        </p>
        <p class="info-paragraph">Exclusive Closet designers are exceptionally skilled artisans in a craft that few can master.</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <img style="width: 100%" src="{{ asset('img/design3.jpg.jpeg') }}" alt="CLIENTS’ STORIES">
        <p style="text-align: center;">
          <span style="color: #d10808;">
            <strong>CLIENTS’ STORIES</strong>
          </span>
        </p>
        <p class="info-paragraph">Our team has a passion for improving the lives of our clients through superior service and exquisite custom designs.</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <img style="width: 100%" src="{{ asset('img/design4.jpg.jpeg') }}" alt="SATISFACTION GUARANTEED">
        <p style="text-align: center;">
          <span style="color: #d10808;">
            <strong>SATISFACTION GUARANTEED</strong>
          </span>
        </p>
        <p class="info-paragraph">We ensure your complete satisfaction with everything we do – from the initial consultation to the final walk through.</p>
      </div>
    </div>
  </div>
</section>
<section id="info-section-sm">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <img style="width: 100%" src="{{ asset('img/design1.jpg.jpeg') }}" alt="COLLABORATION">
        <p style="text-align: center;">
          <span style="color: #d10808;">
            <strong>COLLABORATION</strong>
          </span>
        </p>
        <p class="info-paragraph">An exceptional result is achieved when the client and interior designer collaborate from the beginning of the project.</p>
      </div>
      <div class="col-sm-6 col-xs-12">
        <img style="width: 100%" src="{{ asset('img/design2.jpg.jpeg') }}" alt="CRAFTSMANSHIP">
        <p style="text-align: center;">
          <span style="color: #d10808;">
            <strong>CRAFTSMANSHIP</strong>
          </span>
        </p>
        <p class="info-paragraph">Exclusive Closet designers are exceptionally skilled artisans in a craft that few can master.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <img style="width: 100%" src="{{ asset('img/design3.jpg.jpeg') }}" alt="CLIENTS’ STORIES">
        <p style="text-align: center;">
          <span style="color: #d10808;">
            <strong>CLIENTS’ STORIES</strong>
          </span>
        </p>
        <p class="info-paragraph">Our team has a passion for improving the lives of our clients through superior service and exquisite custom designs.</p>
      </div>
      <div class="col-sm-6 col-xs-12">
        <img style="width: 100%" src="{{ asset('img/design4.jpg.jpeg') }}" alt="SATISFACTION GUARANTEED">
        <p style="text-align: center;">
          <span style="color: #d10808;">
            <strong>SATISFACTION GUARANTEED</strong>
          </span>
        </p>
        <p class="info-paragraph">We ensure your complete satisfaction with everything we do – from the initial consultation to the final walk through.</p>
      </div>
    </div>
  </div>
</section>
<section id="banner-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <img style="width: 100%" src="{{ asset('img/banner-main4.jpg.jpeg') }}" alt="Banner">
      </div>
      <div class="col-md-6">
        <h2 style="margin-top: 0" class="banner-texts">Infinite options for a look that is QUITE UNIQUE
        </h2>
        <ul class="list-paragraph">
          <li>Perfect harmony of form, color and function. We are the leaders in innovative closet design and closet systems
            in Los Angeles, California & our products are manufactured in our U.S.A facility.
          </li>
          <li>
            We will create your dream closet & install your new closet system at your home or business.
          </li>
          <li>
            We offer limited lifetime warranty on all of our closet systems.
          </li>
        </ul>
        <h2 class="banner-texts">Your Space – Your Style!</h2>
        <ul class="list-paragraph">
          <li style="list-style: none; margin-bottom: 10px">No matter the type of home you live in, whether a studio loft apartment, a three bedroom townhouse, or a beautiful
            suburban home, odds are there’s a closet in every room that needs more space and more organization.
          </li>
          <li>Walk - In Closets</li>
          <li>Custom Closet Designs</li>
          <li>Shoe Closets</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- Collaboration Section Start -->
<section id="collaboration-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="collabotation-title">Exclusive Closet Design</h1>
        <p class="collaboration-paragraph">It’s the challenge everyone faces in their homes and offices; closets are the number one place for clutter and figuring
          out how to manage that clutter can be incredibly frustrating. But, more importantly, organizing your closet can
          be incredibly life-changing. If you want to improve your life immediately, what do they say? Clean out a closet.
        </p>
        <p class="collaboration-paragraph">Well, there’s a thought, but how about Design Your Own Closet? Now we are getting somewhere… Exclusive Closet Designs
          is Los Angeles and Broward County’s number one choice for custom closet designing and manufacturing. Located right
          here in Los Angeles, CA, we are a family-owned team of experienced, fully licensed and insured craftsmen specializing
          in residential and commercial spaces like storage rooms, laundry rooms, in-home closets and offices. No matter
          the size of the space or the budget, nothing stops us from designing unique custom closets that add complete stability
          and harmony to our client’s lives. And we really enjoy doing it.</p>
        <p class="collaboration-paragraph">We are proud to be the leaders in innovative closet designs by transforming any disorganized area, from a small shoe
          closet to a cluttered garage, into a practical and pleasing space with a personal touch. Our closet makers love
          the challenge of creating more space and the opportunity to get creative so that every closet is a custom design
          and all your own.</p>
      </div>
      <div class="col-md-6">
        <h1 class="collabotation-title">1-323-894-9224</h1>
        <p class="collaboration-paragraph">Additionally, we believe the key to an organized life starts with your closet and ends with your 100% satisfaction
          guaranteed. That is why we offer a lifetime warranty with unbeatable prices for custom-made, modern closets along
          with the best service and best quality from our closet makers. From small pantries to large walk-ins, our closet
          designers have been surpassing our client’s expectations for over 25 years. Attention to detail along with quality
          customer service allows us to give our clients their dream closets and a sigh of relief.
        </p>
        <p class="collaboration-paragraph">If you have a problem closet, give us a call @ 305.504.8811 and we can transform it into a place of functional beauty
          that provides space for everything you need. We will start with a free consultation and continue with our one-on-one,
          individual treatment to create what, until now, has only existed in your mind. So don’t delay and let one of our
          highly skilled closet designers take care of what is now your biggest headache, and revolutionize it into your
          favorite home investment or office solution.</p>
        <p style="margin-top: 20px">
          <img style="width: 100%" src="{{ asset('img/your-life-easier.png') }}" alt="Life Easier">
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Collaboration Section End -->

<!-- What Customers Are Saying Start -->
@include('include.whatcustomersaresaying')
<!-- What Customers Are Saying End -->

<!-- How It Works Start -->
@include('include.howitworks');
<!-- How It Works End -->

<!-- ToolbarBootom Start -->
@include('include.toolbarBootom')
<!-- ToolbarBootom End -->

<!-- Footer Section Start -->
@include('include.footer')
<!-- Footer Section End -->
@endsection