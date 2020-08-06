@extends('template.main')
@push('styles')
<style>
    @media only screen and (min-width: 992px) {
        .gallery{
            height:202.5px;
        }
    } 
    @media only screen and (max-width: 480px) {
        .gallery{
            height:150.5px;
        }
    }     
</style>
@endpush
@section('content')
  <!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>Galeri.</h3>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /blue -->

  <!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->

  <div class="container mtb">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 centered">
        <h2>Galeri Gambar-Gambar kursus</h2>
        <br>
        <div class="hline"></div>
      </div>
    </div>
  </div>

  <!-- *****************************************************************************************************************
	 PORTFOLIO SECTION
	 ***************************************************************************************************************** -->
  <div id="portfoliowrap">
    <div class="portfolio-centered">
      <div class="recentitems portfolio">

    @foreach($pics as $key => $data)
        @php $images = json_decode($data->filename,true); @endphp
            @if(is_array($images) && !empty($images))
            @foreach($images as $img)
                <div class="portfolio-item graphic-design">
                <div class="he-wrap tpl6">
                    <img class="gallery" src="{{ url('/storage/galleries/'. $img) }}" alt="">
                    <div class="he-view">
                    <div class="bg a0" data-animate="fadeIn">
                        <h3 class="a1" data-animate="fadeInDown">{{ $course->gallery_title }}</h3>
                        <a data-rel="prettyPhoto" href="{{ url('/storage/galleries/'. $img) }}" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                        <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                    </div>
                    <!-- he bg -->
                    </div>
                    <!-- he view -->
                </div>
                <!-- he wrap -->
                </div>
                <!-- end col-12 -->
            @endforeach
            @endif
    @endforeach


      </div>
      <!-- portfolio -->
    </div>
    <!-- portfolio container -->
  </div>
  <!--/Portfoliowrap -->
@endsection