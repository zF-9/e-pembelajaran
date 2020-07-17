@extends('template.main')
@push('styles')
  	<!-- stylesheet css profile -->
  	<!--<link rel="stylesheet" href="{{asset('css/css_temp/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/css_temp/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/css_temp/templatemo-blue.css')}}">-->
    <!--<link rel="stylesheet" href="{{ asset('css/profile-card.css') }}">-->
    <link rel="stylesheet" href="{{ asset('css/profile-demo-2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal-edit.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('css/util-profile-edit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile-edit.css') }}">-->
    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
@endpush
@section('content')


  <div class="container" style="margin-top:32px">
   <!--<section id="">-->
            <div class="row">
               <!--Profile Card 3-->
               <div class="col-md-4 col-xs-12">
                  <div class="card profile-card-3">
                     <div class="background-block">
                           <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
                     </div>
                     <div class="profile-thumb-block">
                           <img src="storage/profile_img/{{ old('name', auth()->user()->avatar)}}" alt="profile-image" class="profile"/>
                     </div>
                     <div class="card-content">
                        <h2>{{ auth()->user()->name }}<small>{{ auth()->user()->jawatan }}</small></h3>
                        <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                        </div>
                     </div>
                     <!--<p class="mt-3 w-100 float-left text-center"><strong>Modren Profile Card</strong></p>-->
               </div>

               <div class="col-lg-8 col-xs-12 right-side">     
               
                  <div class="tabs">
                     <input type="radio" name="tabs" id="tabone" checked="checked">
                     <label for="tabone">Profil Peribadi</label>
                     <div class="tab">
                        <!--<h1>Tab One Content</h1>-->
                        <h4><small><strong>Nama: </strong>{{ auth()->user()->name }}</small></h4>
                        <h4><small><strong>Emel: </strong>{{ auth()->user()->email }}</small></h4>
                        <h4><small><strong>Jawatan: </strong>{{ auth()->user()->jawatan }}</small></h4>
                        <h4><small><strong>Gred: </strong>{{ auth()->user()->gred }}</small></h4>
                        <h4><small><strong>Kementerian/Jabatan/Agensi: </strong>{{ auth()->user()->agensi }}</small></h4>
                        <h4><small><strong>Alamat: </strong>{{ auth()->user()->alamat }}</small></h4>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                           dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                           occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>-->
                     </div>
                     
                     <input type="radio" name="tabs" id="tabtwo">
                     <label for="tabtwo">Kemas Kini Profil</label>
                     <div class="tab">

                        <div class="col-md-12" style="margin-top: 12px">
                           <img src="storage/profile_img/{{ auth()->user()-> avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                           <h4 style="text-transform:uppercase">{{ auth()->user()->name }}</h4>
                           <form enctype="multipart/form-data" action="/updateAvatar" method="POST">
                           @csrf
                              <!--<label style="text-transform:uppercase;background:#efefef">Muat Naik Gambar Profil</label>-->
                              <input type="file" name="avatar">
                              <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                              <!--<input style="margin-top:12px; margin-bottom: 12px" type="submit" class="pull-right btn btn-sm btn-primary">-->
                              <button type="button submit" style="margin-top:16px; margin-bottom: 12px" class="btn btn-primary">Muat Naik</button>
                           </form>
                       </div>
                       <button type="button submit" class="btn btn-success update-profile">
                           <a href="#EditModal" data-toggle="modal" style="color:white">Edit Profil</a>
                       </button>
                       
                     </div>
                     
                     <input type="radio" name="tabs" id="tabthree">
                     <label for="tabthree">Senarai Kertas Kerja</label>
                     <div class="tab">
                        <h1>Tab Three Content</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                     </div>
                  </div>

               </div>

            </div>

   <!--</section>-->
  </div>



<div class="container mtb">
    <div class="row">

    <h1 style="text-align: center">Senarai Kertas Kerja</h1>
    <div class="content-wrapper">
   @if($post->isEmpty())
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
   @else 
      @foreach($post as $key => $data)
         <div class="news-card">
            <a href="#" class="news-card__card-link"></a>
            <img src="storage/{{$data->gallery_file}}" alt="" class="news-card__image">
            <!-- https://images.pexels.com/photos/127513/pexels-photo-127513.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260 -->
            <div class="news-card__text-wrapper">
               <h2 class="news-card__title">{{ $data->paperwork_title }}</h2>
               <div class="news-card__post-date">{{ $data->date_publish }}</div>
               <div class="news-card__details-wrapper">
               <p class="news-card__excerpt">{{ $data->paperwork_desc }}</p>
               <a href="#" class="news-card__read-more">Lanjut<i class="fas fa-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
      @endforeach
   @endif

      </div>
   </div>
</div>
@endsection
@push('scripts')
  <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
  <script src="{{asset('js/profile-edit-modal.js')}}"></script>
@endpush