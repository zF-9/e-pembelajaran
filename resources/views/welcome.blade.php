<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Main Stylesheet File -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900|Lato:400,900" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/prettyphoto/css/prettyphoto.css')}}" rel="stylesheet">
        <link href="{{asset('lib/hover/hoverex-all.css')}}" rel="stylesheet">        


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            body {
                /* Location of the image */
                background-image: url('images/backgnd.jpg');
                
                /* Background image is centered vertically and horizontally at all times */
                background-position: center center;
                
                /* Background image doesn't tile */
                background-repeat: no-repeat;
                
                /* Background image is fixed in the viewport so that it doesn't move when 
                    the content's height is greater than the image's height */
                background-attachment: fixed;
                
                /* This is what makes the background image rescale based
                    on the container's size */
                background-size: cover;
                
                /* Set a background color that will be displayed
                    while the background image is loading */
                background-color: #464646;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                background-color: black;
                opacity:0.5;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background-color: black;
                opacity: 0.5;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        
            /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }


    </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links" style="background-color:black ;opacity: 0.5">
                    @auth
                        <a href="{{ url('/home') }}">HALAMAN UTAMA</a>
                    @else
                        <a href="{{ route('login') }}">LOG MASUK</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">DAFTAR MASUK</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    PORTAL E-PEMBELAJARAN JPANS
                </div>

                <div class="links">
                    <a href="/about">Info</a>
                    <a href="/contact">Hubungi Kami</a>
                    <!--<a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>-->
                </div>
            </div>
        </div>

        <!--<div class="row">
                <h3>My Google Maps Demo</h3>
                //The div element for the map
                <div id="map"></div>
                <script>
                    // Initialize and add the map
                    function initMap() {
                    // The location of Uluru
                    var uluru = {lat: 6.015589, lng: 116.110963};
                    // The map, centered at Uluru
                    var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 4, center: uluru});
                    // The marker, positioned at Uluru
                    var marker = new google.maps.Marker({position: uluru, map: map});
                    }
                </script>
        </div>-->

  <!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
     <div id="footerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>INFO</h4>
          <div class="hline-w"></div>
          <p>
            Merancang dan menawarkan program Latihan Dalam Perkhidmatan berteraskan pembangunan dan pembelajaran 
            berterusan bagi melengkapkan penjawat awam dengan pengetahuan, kemahiran dan ciri-ciri peribadi yang diperlukan 
            untuk melaksanakan tugas dan tanggungjawab sesuatu jawatan.  
          </p>
        </div>
        <div class="col-lg-4">
          <h4>PAUTAN SOSIAL</h4>
          <div class="hline-w"></div>
          <p>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-tumblr"></i></a>
          </p>
        </div>
        <div class="col-lg-4">
          <h4>ALAMAT</h4>
          <div class="hline-w"></div>
          <p>
          Jabatan Perkhidmatan Awam Negeri Sabah<br/> 
          Tingkat 12-14, Blok A, Pusat Pentadbiran Negeri Sabah,<br/> 
          Jalan Sulaman, Teluk Likas, 88400 Kota Kinabalu, Sabah.<br/><br/>
          Talian: 088 368600/368601<br/>
          </p>
        </div>

      </div>
    </div>
  </div>

  <!-- Logout Modal -->
  <div id="logoutModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
      <div class="modal-content">
        <div class="modal-header flex-column">
          <div class="icon-box">
            <i class="material-icons">&#xE5CD;</i>
          </div>						
          <h4 class="modal-title w-100">Log Keluar?</h4>	
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p>Andakah Anda Ingin Log Keluar? Klik Butang Hijau Untuk Sahkan</p>
        </div>
        <div class="modal-footer justify-content-center">
          
          <button type="button" class="btn btn-success" ><a onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" style="color:white">Log Keluar</a></button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" >Batal</button>
            
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
         
        </div>
      </div>
    </div>
  </div>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>LDP</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/solid-bootstrap-business-template/
          Licensing information: https://templatemag.com/license/
        -->
       <!-- Created with Laravel by <a href="https://github.com/kewl8zewl?tab=repositories">Z.F</a>-->
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/php-mail-form/validate.js')}}"></script>
  <script src="{{asset('lib/prettyphoto/js/prettyphoto.js')}}"></script>
  <script src="{{asset('lib/isotope/isotope.min.js')}}"></script>
  <script src="{{asset('lib/hover/hoverdir.js')}}"></script>
  <script src="{{asset('lib/hover/hoverex.min.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/log-reg.js')}}"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
        

    </body>
</html>
