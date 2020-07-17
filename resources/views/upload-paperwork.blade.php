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
        <h4>Muat Naik Pembentangan Kertas Kerja</h4>
        <div class="hline"></div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        <form class="contact-form" role="form" action="/uploadPost" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <!-- section soalan -->
        <div class="form-group">

        <hr>
            <!--<label>
              <input type="text" class="dateselect" required="required"/>
              <span>Date</span>
            </label>-->

            <div class="row" style="margin:2px 2px 2px 2px">
                <label for="categry">Pilih Kategori Kertas Kerja:</label>
                <select id="categry" name="category">
                    <option>PENGURUSAN</option>
                    <option>KEPIMPINAN</option>
                    <option>POLISI</option>
                    <option>GOVERNAN</option>
                    <option>KEWANGAN</option>
                    <option>TEKNOLOGI MAKLUMAT</option>
                    <option>EKONOMI</option>
                    <option>PERHUTANAN</option>
                    <option>PERTANIAN</option>
                    <option>SAINS</option>
                    <option>KESIHATAN</option>
                </select>
            </div>

            <div class="form-group">
              <label>Lokasi Kursus</label>
              <input type="text" name="location" class="form-control" id="loc" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>            

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label>Tarikh Mula Kursus</label>
                  <input type="text" name="date_course_start" class="dateselect form-control" id="start" placeholder="">
                  <div class="validate"></div>
                </div>
                <div class="col-md-6">
                  <label>Tarikh Akhir Kursus</label>
                  <input type="text" name="date_course_end" class="dateselect form-control" id="end" placeholder="">
                  <div class="validate"></div>
                </div>
              </div>
            </div> 

            <div class="form-group">
             <label>Penganjur Kursus</label>
              <input type="text" name="organizer" class="form-control" id="org" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>  
        <hr>            

        <label>Tajuk Kertas Kerja</label>
              <input type="name" name="pw_name" class="form-control" id="pw-name" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>

              <div class="surat-akuan col-sm-12 col-md-6" style="align:center; padding-top: 12px">
                    <label class="form-control-label" for="pw_upload">Muat Naik Kertas Kerja</label>
                    <div class="col-sm-9" style="padding-left: 0px;padding-top: 9px">
                            <input name="pw_upload" type="file" class="custom-file-inputform-control form-control-alternative" placeholder="" value="" required="" autofocus="">
                            <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                    </div>
             </div>               

             <div class="form-group">
              <textarea class="form-control" name="pw_desc" id="contact-message" placeholder="Penerangan Pendek tentang Kertas Kerja" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>             
        </div>
        <hr>
        <!-- section soalan -->


        <!-- section soalan -->
        <div class="form-group">
              <label>Tajuk Nota & Bahan Kursus</label>
              <input type="name" name="note_name" class="form-control" id="title_note" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>

              <div class="surat-akuan col-sm-12 col-md-6" style="align:center; padding-top: 12px">
                    <label class="form-control-label" for="note_upload">Muat Naik Nota & Bahan Kursus</label>
                    <div class="col-sm-9" style="padding-left: 0px;padding-top: 9px">
                            <input name="note_upload" type="file" class="custom-file-inputform-control form-control-alternative" placeholder="" value="" required="" autofocus="">
                            <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                    </div>
             </div>               

             <div class="form-group">
              <textarea class="form-control" name="note_desc" id="contact-message" placeholder="Penerangan Pendek tentang Nota & Bahan Kursus" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>             
        </div>
        <hr>
        <!-- section soalan -->        

        <!-- section soalan -->
        <div class="form-group">
              <label>Tajuk Galeri Kursus</label>
              <input type="name" name="gallery_name" class="form-control" id="gallery-name" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>

              <div class="surat-akuan col-sm-12 col-md-6" style="align:center; padding-top: 12px">
                    <label class="form-control-label" for="gallery_upload">Muat Naik Gambar-Gambar Kursus</label>
                    <div class="col-sm-9" style="padding-left: 0px;padding-top: 9px">
                            <input multiple name="gallery_upload" type="file" class="custom-file-inputform-control form-control-alternative" placeholder="" value="" required="" autofocus="">
                            <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                    </div>
             </div>               

             <div class="form-group">
              <textarea class="form-control" name="gallery_desc" id="contact-message" placeholder="Penerangan Pendek tentang Galeri Gambar Kursus" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>             
        </div>
        <hr>
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