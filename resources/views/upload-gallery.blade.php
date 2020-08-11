@extends('template.main')
@section('content')
  <!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>Muat Naik.</h3>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /blue -->


  <!-- *****************************************************************************************************************
	 CONTACT FORMS
	 ***************************************************************************************************************** -->

  <div class="container mtb">
    <div class="row">
      <div class="col-lg-8">
        <h4>Muat Naik Galeri Gambar</h4>
        <div class="hline"></div>
        <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>-->
        <form class="contact-form" role="form" action="/uploadGallery" method="POST" enctype="multipart/form-data"> 
        {{ csrf_field() }}
        <!-- section soalan -->
        <div class="form-group">
        <!-- section soalan -->
            <div class="form-group">
            <hr>
                <label>Tajuk Galeri Kursus</label>
                <input name="belongsToPost" value="{{ session('data_key') }}" type="hidden">
                <input type="name" name="gallery_name" class="form-control" id="gallery-name" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
                <hr>
                <label class="form-control-label" for="gallery_upload">Muat Naik Gambar-Gambar Kursus</label>
                <p style="color:red">Sila muat naik gambar resolusi tinggi untuk galeri</p>
                <div class="input-group control-group increment" >
                    <input type="file" name="filename[]" class="form-control" style="color:black">
                    <div class="input-group-btn"> 
                    <button style="height:50px;margin-bottom: 12px" class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
                    </div>
                </div>
                <div class="clone hide">
                    <div class="control-group input-group" style="margin-top:10px">
                    <input type="file" name="filename[]" class="form-control">
                    <div class="input-group-btn"> 
                        <button style="height:50px;margin-bottom: 12px" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i>Padam</button>
                    </div>
                    </div>
                </div>        

                <div class="form-group">
                <textarea class="form-control" name="gallery_desc" id="contact-message" placeholder="Penerangan Pendek tentang Galeri Gambar Kursus" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
                </div>             
            </div>
        <hr>
        <!-- section soalan -->

         
        </div>
        <!--<hr>-->
        <!-- section soalan -->
  



            <!--<div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>-->

            <div class="form-send">
              <button type="submit" class="btn btn-large">Hantar</button>
            </div>

          </form>
      </div>

      <div class="col-lg-4">
        <h4>Alamat Kami</h4>
        <div class="hline"></div>
        <p>
          Jabatan Perkhidmatan Awam Negeri Sabah<br/> 
          Tingkat 12-14, Blok A, Pusat Pentadbiran Negeri Sabah,<br/> 
          Jalan Sulaman, Teluk Likas, 88400 Kota Kinabalu, Sabah.<br/><br/>
        </p>
        <p>
          Email: hello@LDP.com<br/> Talian: 088 368600/368601<br/>
        </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
    </div>
  </div>
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
@endpush