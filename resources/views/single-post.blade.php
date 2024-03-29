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
        <p><img class="img-responsive" src="{{asset('images/post01.jpg')}}"></p>
        <a href="single-post.html"><h3 class="ctitle">Time to change your apps.</h3></a>
        <p>
          <csmall>Posted: April 25, 2014.</csmall> |
          <csmall2>By: Admin - 3 Comments</csmall2>
        </p>
        <p><b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
          book.</p>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
          desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Contrary to popular belief, <b>Lorem Ipsum is not simply random text</b>. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at <a href="#">Hampden-Sydney College</a>          in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
        <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first
          line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        <h4>Why do we use it?</h4>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
          here, content here', making it look like readable English.</p>
        <blockquote>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
          accident, sometimes on purpose (injected humour and the like).</blockquote>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
        <div class="spacing"></div>
        <h6>SHARE:</h6>
        <p class="share">
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-tumblr"></i></a>
          <a href="#"><i class="fa fa-google-plus"></i></a>
        </p>

      </div>

      <div class="col-lg-4">
        <h4>Search</h4>
        <div class="hline"></div>
        <p>
          <br/>
          <input type="text" class="form-control" placeholder="Search something">
        </p>

        <div class="spacing"></div>

        <h4>Categories</h4>
        <div class="hline"></div>
        <p><a href="#"><i class="fa fa-angle-right"></i> Wordpress</a> <span class="badge badge-theme pull-right">9</span></p>
        <p><a href="#"><i class="fa fa-angle-right"></i> Photoshop</a> <span class="badge badge-theme pull-right">3</span></p>
        <p><a href="#"><i class="fa fa-angle-right"></i> Web Design</a> <span class="badge badge-theme pull-right">11</span></p>
        <p><a href="#"><i class="fa fa-angle-right"></i> Development</a> <span class="badge badge-theme pull-right">5</span></p>
        <p><a href="#"><i class="fa fa-angle-right"></i> Tips & Tricks</a> <span class="badge badge-theme pull-right">7</span></p>
        <p><a href="#"><i class="fa fa-angle-right"></i> Code Snippets</a> <span class="badge badge-theme pull-right">12</span></p>

        <div class="spacing"></div>

        <h4>Recent Posts</h4>
        <div class="hline"></div>
        <ul class="popular-posts">
          <li>
            <a href="#"><img src="img/thumb01.jpg" alt="Popular Post"></a>
            <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
            <em>Posted on 02/21/14</em>
          </li>
          <li>
            <a href="#"><img src="img/thumb02.jpg" alt="Popular Post"></a>
            <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
            <em>Posted on 03/01/14</em>
            <li>
              <a href="#"><img src="img/thumb03.jpg" alt="Popular Post"></a>
              <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
              <em>Posted on 05/16/14</em>
            </li>
            <li>
              <a href="#"><img src="img/thumb04.jpg" alt="Popular Post"></a>
              <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
              <em>Posted on 05/16/14</em>
            </li>
        </ul>

        <div class="spacing"></div>

        <h4>Popular Tags</h4>
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