@extends('template.main')
@section('content')
  <!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>Senarai Kursus - 
            @foreach ($postings as $k => $v)
                @if($loop->last)
                    {{ $v->category}}
                @endif
            @endforeach 
        </h3>
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


    <div class="content-wrapper">

    @foreach($postings as $key => $data)
         <div class="news-card">
            <a href="{{ route('article', ['post_id' => $data->post_id]) }}" class="news-card__card-link"></a>
            @php $images = json_decode($data->filename,true); @endphp
            @if(is_array($images) && !empty($images))
            @foreach($images as $img)
               <img src="{{ url('storage/galleries/'. $img) }}" alt="" class="news-card__image">
            @endforeach
            @endif
            <!-- https://images.pexels.com/photos/127513/pexels-photo-127513.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260 -->
            <div class="news-card__text-wrapper">
               <h2 class="news-card__title">{{ $data->paperwork_title }}</h2>
               <div class="news-card__post-date">{{ $data->date_publish }}</div>
               <div class="news-card__details-wrapper">
               <p class="news-card__excerpt">{{ $data->paperwork_desc }}</p>
               <a href="{{ route('article', ['post_id' => $data->post_id]) }}" class="news-card__read-more">Lanjut<i class="fas fa-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
    @endforeach

</div>


      </div>
    </div>
  </div>
@endsection
