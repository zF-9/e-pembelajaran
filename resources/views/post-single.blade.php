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
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->

  <div class="container mt">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 centered">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          @php $imgs = json_decode($image_tiles->filename,true); @endphp  
          @if(is_array($imgs) && !empty($imgs))
            <div class="item active">
              <img src="/storage/galleries/{{ $imgs[0] }}" alt="">
            </div>          
            @foreach($imgs as $key => $gallery_img)     
              @if( $loop->iteration > 1)
                  <div class="item">
                    <img src="/storage/galleries/{{ $gallery_img }}" alt="">
                  </div>  
              @endif
            @endforeach
            @endif
          </div>

        </div>
      </div>

      <div class="col-lg-5 col-lg-offset-1">
        <div class="spacing"></div>
        <h4>{{ $post_data->category }}</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <h4>{{ $post_data->paperwork_title }}</h4>
        <p>{{ $post_data->paperwork_desc }}
            <p><a href="/storage/{{ $post_data->paperwork_file }}">[Klik Sini]</a> untuk muat turun kertas kerja.</p>
        </p>
        <h4>{{ $post_data->note_title }}</h4>
        <p>{{ $post_data->note_desc }} 
        <p><a href="/storage/{{ $post_data->note_file }}">[Klik Sini]</a> untuk muat turun nota & bahan kursus</p></p>        
        <h4>{{ $image_tiles->gallery_title }}</h4>
        <p>{{ $image_tiles->gallery_desc }}</p>
        <p><a href="{{ route('gallery', ['data' => $post_data->id]) }}">[Klik Sini]</a></p>     
      </div>

      <div class="col-lg-4 col-lg-offset-1">
        <div class="spacing"></div>
        <h4>Info Artikel</h4>
        <div class="hline"></div>
        <p><b>Tarikh:</b> {{ $post_data->date_publish }}</p>
        <p><b>Penyumbang:</b> {{ $user_data->name }}</p>
        <p><b>Jabatan:</b> {{ $user_data->agensi }}</p>
        <p><b>Kategori:</b> {{ $post_data->category }}</p>
        <p><b>Tajuk:</b> {{ $post_data->paperwork_title }}</p>
        <p><b>Tarikh Kursus:</b> {{ $post_data->date_start }} - {{ $post_data->date_end }}</p>
        <p><b>Penganjur:</b> {{ $post_data->organizer }}</p>
        <p><b>Lokasi Kursus:</b> {{ $post_data->location }}</p>
        <p><b>Web:</b> <a href="http://example.com">http://example.com</a></p>
      </div>

    </div>
  </div>

  <!-- *****************************************************************************************************************
	 PORTFOLIO SECTION
	 ***************************************************************************************************************** -->
  <div id="portfoliowrap">
    <div class="portfolio-centered">
      <h3>Terkini.</h3>
      <div class="recentitems portfolio">

        @php $images = json_decode($image_tiles->filename,true); @endphp
          @if(is_array($images) && !empty($images))
            @foreach($images as $img)
            <div class="portfolio-item graphic-design">
                <div class="he-wrap tpl6">
                    <img class="gallery" src="{{ url('/storage/galleries/Thumbnails/'. $img) }}" alt="">
                    <div class="he-view">
                    <div class="bg a0" data-animate="fadeIn">
                        <h3 class="a1" data-animate="fadeInDown">{{ $image_tiles->gallery_title }}</h3>
                        <a data-rel="prettyPhoto" href="{{ url('storage/galleries/'. $img) }}" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
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
      </div>
      <!-- portfolio -->
    </div>
    <!-- portfolio container -->
  </div>
  <!--/Portfoliowrap -->
@endsection