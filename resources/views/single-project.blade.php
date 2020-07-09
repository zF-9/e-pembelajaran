@extends('template.main')
@section('content')
  <!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>Artikel</h3>
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
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="{{asset('images/portfolio/single01.jpg')}}" alt="">
            </div>
            <div class="item">
              <img src="{{asset('images/portfolio/single02.jpg')}}" alt="">
            </div>
            <div class="item">
              <img src="{{asset('images/portfolio/single03.jpg')}}" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-lg-offset-1">
        <div class="spacing"></div>
        <h4>WEB DEVELOPMENT</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <h4>Kertas Kerja</h4>
        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            <p><a href="#">[Klik Sini]</a> untuk muat turun kertas kerja.</p>
        </p>
        <h4>Nota & Bahan Kursus</h4>
        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        <p><a href="#">[Klik Sini]</a> untuk muat turun nota & bahan kursus</p></p>        
        <h4>Gambar Kursus</h4>
        <p><a href="/portfolio">[Klik Sini]</a></p>     
      </div>

      <div class="col-lg-4 col-lg-offset-1">
        <div class="spacing"></div>
        <h4>Info Artikel</h4>
        <div class="hline"></div>
        <p><b>Tarikh:</b> April 18, 2019</p>
        <p><b>Penyumbang:</b> Marcel Newman</p>
        <p><b>Jabatan:</b> JPAN</p>
        <p><b>Kategori:</b> Teknologi Maklumat</p>
        <p><b>Tajuk:</b> UI/UX Web Development</p>
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
        <div class="portfolio-item graphic-design">
          <div class="he-wrap tpl6">
            <img src="images/portfolio/portfolio_09.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">A Graphic Design Item</h3>
                <a data-rel="prettyPhoto" href="images/portfolio/portfolio_09.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

        <div class="portfolio-item web-design">
          <div class="he-wrap tpl6">
            <img src="images/portfolio/portfolio_02.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">A Web Design Item</h3>
                <a data-rel="prettyPhoto" href="images/portfolio/portfolio_02.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

        <div class="portfolio-item graphic-design">
          <div class="he-wrap tpl6">
            <img src="images/portfolio/portfolio_03.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">A Graphic Design Item</h3>
                <a data-rel="prettyPhoto" href="images/portfolio/portfolio_03.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

        <div class="portfolio-item graphic-design">
          <div class="he-wrap tpl6">
            <img src="images/portfolio/portfolio_04.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">A Graphic Design Item</h3>
                <a data-rel="prettyPhoto" href="images/portfolio/portfolio_04.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

        <div class="portfolio-item graphic-design">
          <div class="he-wrap tpl6">
            <img src="images/portfolio/portfolio_05.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">A Graphic Design Item</h3>
                <a data-rel="prettyPhoto" href="images/portfolio/portfolio_04.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->


      </div>
      <!-- portfolio -->
    </div>
    <!-- portfolio container -->
  </div>
  <!--/Portfoliowrap -->
@endsection