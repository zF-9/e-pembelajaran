@extends('template.main')
@section('content')
  <!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>Kategori</h3>
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
        @foreach($content as $key_main => $cont)
          <!-- box per category -->
          @foreach($cont as $key => $contx)
            @if($loop->last) <!-- iterate the last in the collections -->
              @php $images = json_decode($contx->filename,true); @endphp         
                @if(is_array($images) && !empty($images))
                  <p><img class="img-responsive" src="storage/galleries/{{ $images[0] }}"></p>
                @endif
            @endif
          @endforeach
          <a href="/list-course-by-category/{{ $key_main }}"><h3 class="ctitle">{{ $key_main }}</h3></a>
          <p>
            <csmall>Posted: </csmall> |
            <csmall2>By: </csmall2>
          </p>
          <p></p>
          <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          <p><a href="#">[Read More]</a></p>
          <div class="hline"></div>

          <div class="spacing"></div>
          <!-- box per category -->
        @endforeach

        <!-- box per category -->
        <!--<p><img class="img-responsive" src="images/post01.jpg"></p>
        <a href="/list-course"><h3 class="ctitle">TEKNOLOGI MAKLUMAT</h3></a>
        <p>
          <csmall>Posted: April 25, 2014.</csmall> |
          <csmall2>By: Admin - 3 Comments</csmall2>
        </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <p><a href="single-post.html">[Read More]</a></p>
        <div class="hline"></div>

        <div class="spacing"></div>

        <p><img class="img-responsive" src="images/post02.jpg"></p>
        <a href="single-post.html"><h3 class="ctitle">KEPIMPINAN</h3></a>
        <p>
          <csmall>Posted: April 25, 2014.</csmall> |
          <csmall2>By: Admin - 3 Comments</csmall2>
        </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <p><a href="single-post.html">[Read More]</a></p>
        <div class="hline"></div>

        <div class="spacing"></div>

        <p><img class="img-responsive" src="images/post03.jpg"></p>
        <a href="single-post.html"><h3 class="ctitle">KESIHATAN</h3></a>
        <p>
          <csmall>Posted: April 25, 2014.</csmall> |
          <csmall2>By: Admin - 3 Comments</csmall2>
        </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <p><a href="single-post.html">[Read More]</a></p>
        <div class="hline"></div>-->

      </div>

      <div class="col-lg-4">
        <h4>Carian</h4>
        <div class="hline"></div>
        <p>
          <br/>
          <input type="text" class="form-control" placeholder="Kata Kunci">
        </p>

        <div class="spacing"></div>

        <h4>Kategori</h4>
        <div class="hline"></div>
        @foreach($content as $key => $side)
          <p><a href="#"><i class="fa fa-angle-right"></i>{{ $key }} </a> <span class="badge badge-theme pull-right">{{ $side->count() }}</span></p>
        @endforeach

        <div class="spacing"></div>

        <h4>Kemasukan Terkini</h4>
        <div class="hline"></div>
        <ul class="popular-posts">
        @foreach($latest as $key => $latest_post)
          @if($loop->iteration < 6)
            <li>
                @php $imgs = json_decode($latest_post->filename,true); @endphp         
                @if(is_array($imgs) && !empty($imgs))
                  <a href="/post/{{ $latest_post->post_id }}"><img height="70" width="70" src="/storage/galleries/{{ $imgs[0] }}"></a>
                @endif
              <p><a href="/post/{{ $latest_post->post_id }}">{{ $latest_post->paperwork_title }}</a></p>
              <em>Terbitan: {{ $latest_post->date_publish }}</em>
            </li>
          @endif
        @endforeach
          <!--<li>
            <a href="#"><img src="images/thumb02.jpg" alt="Popular Post"></a>
            <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
            <em>Posted on 03/01/14</em>
            </li>
            <li>
              <a href="#"><img src="images/thumb03.jpg" alt="Popular Post"></a>
              <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
              <em>Posted on 05/16/14</em>
            </li>
            <li>
              <a href="#"><img src="images/thumb04.jpg" alt="Popular Post"></a>
              <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
              <em>Posted on 05/16/14</em>
            </li>-->
        </ul>

        <div class="spacing"></div>

        <h4>Popular</h4>
        <div class="hline"></div>
        <p>
          <a class="btn btn-theme" href="#" role="button">Design</a>
          <a class="btn btn-theme" href="#" role="button">Wordpress</a>
          <a class="btn btn-theme" href="#" role="button">Flat</a>
          <a class="btn btn-theme" href="#" role="button">Modern</a>
          <a class="btn btn-theme" href="#" role="button">Wallpaper</a>
          <a class="btn btn-theme" href="#" role="button">HTML5</a>
          <a class="btn btn-theme" href="#" role="button">Pre-processor</a>
          <a class="btn btn-theme" href="#" role="button">Developer</a>
          <a class="btn btn-theme" href="#" role="button">Windows</a>
          <a class="btn btn-theme" href="#" role="button">Phothosop</a>
          <a class="btn btn-theme" href="#" role="button">UX</a>
          <a class="btn btn-theme" href="#" role="button">Interface</a>
          <a class="btn btn-theme" href="#" role="button">UI</a>
          <a class="btn btn-theme" href="#" role="button">Blog</a>
        </p>
      </div>
    </div>
  </div>
@endsection