@extends('template.main')
@section('content')
  <!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>Artikel.</h3>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /blue -->


  <!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

  <div class="container mtb">
    <div class="row">

      <div class="col-lg-8">

      <!--<div class="center">-->
        <div class="property-card">
            <a href="#">
            <div class="property-image">
                <div class="property-image-title">
                <h5>HTML & CSS</h5>
                </div>
            </div></a>
            <div class="property-description">
            <h5> Card Title </h5>
            <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
            </div>
            <a href="#">
            <div class="property-social-icons">
                <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                <i class="fa fa-file-text" aria-hidden="true"></i>

            </div>
            </a>
        </div>
      <!--</div>-->

      </div>
    </div>
  </div>
@endsection
