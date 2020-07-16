@extends('template.main')
@push('styles')
  	<!-- stylesheet css profile -->
  	<!--<link rel="stylesheet" href="{{asset('css/css_temp/bootstrap.min.css')}}">-->
	<link rel="stylesheet" href="{{asset('css/css_temp/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/css_temp/templatemo-blue.css')}}">
  <link href="{{asset('css/profile.css')}}" rel="stylesheet">
  <!--<link href="{{asset('css/side-card.css')}}" rel="stylesheet">-->
@endpush
@section('content')
<!-- preloader section 
<div class="preloader">
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>-->

<!-- header section
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="storage/profile_img/{{ old('name', auth()->user()->avatar) }}" class="img-responsive img-circle tm-border" alt="templatemo easy profile">
				<hr> "images/tm-easy-profile.jpg" 
				<h1 class="tm-title bold shadow">Hi, I am {{ auth()->user()->name }}</h1>
				<h1 class="white bold shadow">Creative Director</h1>
			</div>-->


      <div class="container">
        <div class="row">      
        

          <div class="outer-div">
            <div class="inner-div">
              <div class="front">
                <div class="front__bkg-photo"></div>
                <div class="front__face-photo" style="background:url('storage/profile_img/{{ old('name', auth()->user()->avatar) }}') no-repeat"></div>
                <div class="front__text">
                  <h3 class="front__text-header">{{ auth()->user()->name }}</h3>
                  <p class="front__text-para"><i class="fas fa-map-marker-alt front-icons"></i>Seattle</p>
                  
                  <span class="front__text-hover">Hover to Find Me</span>
                </div>
              </div>
              <div class="back">
                <div class="social-media-wrapper">
                  <a href="#" class="social-icon"><i class="fa fa-free-code-camp" aria-hidden="true"></i></a> 
                  <a href="#" class="social-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#" class="social-icon"><i class="fa fa-id-card-o" aria-hidden="true"></i></a>
                  <a href="#" class="social-icon"><i class="fa fa-address-book" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="news-card col-md-4">
            <a href="#" class="news-card__card-link"></a>
            <img src="images/post03.jpg" alt="" class="news-card__image">
            <!-- https://images.pexels.com/photos/127513/pexels-photo-127513.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260 -->
            <div class="news-card__text-wrapper">
              <h2 class="news-card__title">Excel</h2>
              <div class="news-card__post-date">Jun 24, 2020</div>
              <div class="news-card__details-wrapper">
                <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia iure architecto deserunt distinctio, pariatur&hellip;</p>
                <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>

			<!--<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">PROFIL</h3>
				<h2>Bootstrap v3.3.5</h2>
				<p>This easy HTML profile is brought to you by templatemo website. There are 4 color themes, <a href="index-green.html">Green</a>, <a href="index.html">Blue</a>, <a href="index-gray.html">Gray</a>, and <a href="index-orange.html">Orange</a>. Sed vitae dui in neque elementum tempor eu id risus. Phasellus sed facilisis lacus, et venenatis augue.</p>
				<button type="button" class="btn btn-danger"><a href="#update_profile" data-toggle="modal">Kemas Kini</a></button>
			</div>
		</div>

		</div>
	</div>
</header>-->





<div class="container mtb">
    <div class="row">


    <div class="content-wrapper">
  
  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="images/post03.jpg" alt="" class="news-card__image">
    <!-- https://images.pexels.com/photos/127513/pexels-photo-127513.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260 -->
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Excel</h2>
      <div class="news-card__post-date">Jun 24, 2020</div>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia iure architecto deserunt distinctio, pariatur&hellip;</p>
        <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="https://images.pexels.com/photos/631954/pexels-photo-631954.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Excel: Basic to Intermediate</h2>
      <div class="news-card__post-date">Jan 29, 2018</div>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ex natus nulla rem sequi laborum quod fugit&hellip;</p>
        <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="https://images.pexels.com/photos/631954/pexels-photo-631954.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Excel: Basic to Intermediate</h2>
      <div class="news-card__post-date">Jan 29, 2018</div>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ex natus nulla rem sequi laborum quod fugit&hellip;</p>
        <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

</div>
</div>
</div>
@endsection
@push('scripts')
  <!-- javascript profile page -->	
  <script src="{{asset('js/js_temp/jquery.js')}}"></script>
  <!--<script src="{{asset('js/js_temp/bootstrap.min.js')}}"></script>-->
  <script src="{{asset('js/js_temp/jquery.backstretch.min.js')}}"></script>
  <script src="{{asset('js/js_temp/custom.js')}}"></script>
@endpush

  <!-- modal pendaftaran -->
  <div id="update_profile" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title" style="color: black">Kemas Kini Profil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="container">
              <!--<p>Modal body text goes here.</p>-->
                <form action="/" method="post">
                  {{ csrf_field() }}

				             <div class="col-md-12" style="margin-top: 12px">
                        <img src="storage/profile_img/{{ auth()->user()-> avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                        <h2 style="text-transform:uppercase">{{ auth()->user()->name }}</h2>
                        <!--<form enctype="multipart/form-data" action="/updateAvatar" method="POST">-->
                            <label style="text-transform:uppercase">Muat Naik Gambar Profil</label>
                            <input type="file" name="avatar">
                            <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                            <!--<input style="margin-top:12px; margin-bottom: 12px" type="submit" class="pull-right btn btn-sm btn-primary">-->
                            <!--<button type="button submit" style="margin-top:12px; margin-bottom: 12px" class="btn btn-primary">Upload</button>-->
                        <!--</form>-->
                    </div>

                  <div class="col-md-12 col-sm-12"> 
                    <div class="row">
                      <label>Nama:</label>
                    </div>                    
                      <input name="update_nama" class="col-xl-9 form-control" style="width:43%" type="text" id="nama_p" value="{{ auth()->user()->name }}">    
                  </div>

                  <div class="col-md-12 col-sm-12">
                    <div class="row">
                      <label>Emel:</label>
                      </div>
                      <input class="col-xl-9 form-control" style="width:43%" type="text" id="update_emel" value="{{ auth()->user()->email }}">
                  </div>

                  <div class="col-md-12 col-sm-12">
                    <div class="row">
                      <label>Jawatan & Gred:</label>
                      </div>
                      <input class="col-xl-9 form-control" style="width:43%" type="text" name="update_gred" id="">
                  </div>

                  <div class="col-md-12 col-sm-12">
                    <div class="row">
                      <label>Kementerian/Jabatan/Agensi:</label>
                      </div>
                      <input class="col-xl-9 form-control" style="width:43%" name="update_dept" id="">
                  </div>

                  <div class="col-md-12 col-sm-12">
                    <div class="row">
                      <label>Alamat:</label>
                      </div>
                      <input class="col-xl-9 col-sm-12 form-control" style="width:43%" name="update_addrs" id="">
                  </div>                  


                  <div class="col-md-12 col-sm-12">
                      <button type="submit" class="btn btn-primary" style="margin-top:12px;margin-bottom:12px">Simpan</button>  
                  </div>

                  </form>             
            </div>

            <div class="modal-footer">              
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
      
      </div>
      </div>
    </div>  
    <!-- modal pendaftaran -->