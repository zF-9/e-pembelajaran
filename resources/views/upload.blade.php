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
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

  <div class="container mtb">
    <div class="row">


    <div class="content-wrapper">
  
  <!--<div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="images/post03.jpg" alt="" class="news-card__image">
     https://images.pexels.com/photos/127513/pexels-photo-127513.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260 
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
    <img src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">HTML & CSS</h2>
      <div class="news-card__post-date">Jan 29, 2018</div>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae&hellip;</p>
        <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>-->


<!-- Start of Upload Document -->
<div class="row">
  <div class="col-xl-12 col-lg-12">

    <!--<div class="container">-->

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-12 col-lg-12 col-md-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
              <div class="col-lg-12 ">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">MUAT NAIK KERTAS KERJA</h1>
                  </div>

            <div class="col-lg-12 col-sm-12 col-md-12">
                      <div class="form-group">

                  <form class="user" method="post" action="/pengajian" enctype="multipart/form-data" autocomplete="off">
                  {{ csrf_field() }}
                    <div class="row">

                        <div class="form-group col-lg-6">
                        <div class="form-group">
                            <label>Tajuk Kertas Kerja</label>
                            <input name="paperwork" type="text" class="form-control form-control-user" id="Input_course" placeholder="Tajuk Kursus">
                          </div>
                        </div>
                    

                        <div class="surat-akuan col-sm-12 col-md-6" style="align:center; padding-top: 12px">
                            <label class="form-control-label" for="input_surakuan">Muat Naik Kertas Kerja</label>
                            <div class="col-sm-9" style="padding-left: 0px;padding-top: 9px">
                                <input name="paperwork_upload" type="file" class="custom-file-inputform-control form-control-alternative" placeholder="" value="" required="" autofocus="">
                                    <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                            </div>
                        </div>  
                        
                        <div class="form-group col-lg-6">
                        <div class="form-group">
                            <label>Kertas Kerja</label>
                            <textarea rows="6", cols="62" id="" name="desc_paperwork" style="resize:none, "></textarea>
                          </div>
                        </div>
                      
                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6">
                        <div class="form-group">
                            <label>Tajuk Nota & Bahan Kursus</label>
                            <input name="course_note" type="text" class="form-control form-control-user" id="Input_course" placeholder="Nama Kursus">
                          </div>
                        </div>
                    

                        <div class="surat-akuan col-sm-12 col-md-6" style="align:center; padding-top: 12px">
                            <label class="form-control-label" for="input_surakuan">Muat Naik Nota & Bahan Kursus</label>
                            <div class="col-sm-9" style="padding-left: 0px;padding-top: 9px">
                                <input name="course_note_upload" type="file" id="" class="custom-file-inputform-control form-control-alternative" placeholder="" value="" required="" autofocus="">
                                    <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                            </div>
                        </div>  

                        <div class="form-group col-lg-6">
                        <div class="form-group">
                            <label>Nota & Bahan Kursus</label>
                            <textarea rows="6", cols="62" id="" name="desc_paperwork" style="resize:none, "></textarea>
                          </div>
                        </div>

                    </div>


                    <div class="row">

                        <div class="form-group col-lg-6">
                        <div class="form-group">
                            <label>Tajuk Galeri</label>
                            <input name="gallery_name" type="text" class="form-control form-control-user" id="Input_course" placeholder="Nama Kursus">
                          </div>
                        </div>
                    

                        <div class="surat-akuan col-sm-12 col-md-6" style="align:center; padding-top: 12px">
                            <label class="form-control-label" for="input_surakuan">Muat Naik Gambar-Gambar Kursus</label>
                            <div class="col-sm-9" style="padding-left: 0px;padding-top: 9px">
                                <input multiple name="gallery_upload" type="file" id="input-surakuan" class="custom-file-inputform-control form-control-alternative" placeholder="" value="" required="" autofocus="">
                                    <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                            </div>
                        </div>  

                        <div class="form-group col-lg-6">
                        <div class="form-group">
                            <label>Galeri</label>
                            <textarea rows="6", cols="62" id="" name="desc_paperwork" style="resize:none, "></textarea>
                          </div>
                        </div>

                    </div>

                    <!--<div class="row" style="align:center">

                        <div class="form-group col-lg-6">
                          <div class="form-group">
                            <label>Tarikh Mula Pengajian</label>
                            <input name="startStudy" type="text" class="form-control form-control-user date" id="InputMulaStudy" maxlength="10" placeholder="Tarikh Mula: xx-xx-xxxx">
                          </div> 
                        </div> 

                        <div class="form-group col-lg-6">
                          <div class="form-group">
                            <label>Tarikh Tamat Pengajian</label>
                            <input name="EndStudy" type="text" class="form-control form-control-user date" id="InputTamatStudy" maxlength="10" placeholder="Tarikh Tamat: xx-xx-xxxx">
                          </div> 
                        </div> 

                      </div>
                      

                      <div class="row">
                        <div class="form-group col-lg-6">
                        <div class="form-group">
                            <label>Mod Pengajian</label>
                              <select name="study_mod" class="form-group form-control-user" id="stdy" placeholder="Pilih la yang mana satu" onchange="study_m0de()">
                                <option></option>
                                <option id="ftime" value="Full Time">Sepenuh Masa</option>
                                <option value="Part Time">Separuh Masa</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                        </div>
                        <div class="form-group col-lg-8" id="nama_u_form">
                          <div class="form-group">
                            <label>Universiti</label>
                            <input name="Uni_name" type="text" class="form-control form-control-user" id="Input_uni" placeholder="Nama Universiti">
                          </div>
                        </div>   
                        <div class="form-group col-lg-4" id="option_u_form">
                          <div class="form-group">
                            <label>Universiti</label>
                              <select name="Uni_named" onchange="" class="form-group form-control-user" id="Option_uni">
                                <option value=" "></option>
                                <option value="UTM Space">UTM Space</option>
                                <option value="PLUMS">PLUMS</option>
                              </select>
                          </div>
                        </div>                                        
                      </div>

                      <div class="row">
                        <div class="form-group col-lg-8" id="nama_u_form">
                          
                        </div>   
                      </div>

                      <div class="row">
                        <div class="form-group col-lg-4">
                          <div class="form-group">
                            <label>Pilihan Negara/Negeri</label>
                              <select name="tmpt_study" class="form-group form-control-user" id="place_stdy" placeholder="Pilih la yang mana satu">
                                <option id="os" value="Luar Negara">Luar Negara</option>
                                <option id="loc_c" value="Luar Negeri Sabah">Luar Negeri Sabah</option>
                                <option value="Dalam Negeri Sabah">Dalam Negeri Sabah</option>
                              </select>
                          </div>
                        </div>
                      </div>-->

                  <!--<div class="surat-tawaran col-sm-12 col-md-9" style="align:center">
                      <div id="uploadstatw"> 
                          <label class="stuni form-control-label" for="input-tawaran">Surat Tawaran Dari Universiti</label>
                              <div class="col-sm-9" style="padding-left: 0px;padding-top: 9px;padding-bottom: 12px">
                                  <input name="tawaran" type="file" id="input_tawaran" class="custom-file-inputform-control form-control-alternative" placeholder="" value="" required="" autofocus="">
                                  <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                              </div>
                      </div>
                  </div>

                  <div class="surat-akuan col-sm-12 col-md-9" style="align:center; padding-top: 12px">
                      <label class="form-control-label" for="input_surakuan">Surat Perakuan Dari Ketua Jabatan</label>
                      <div class="col-sm-9" style="padding-left: 0px;padding-top: 9px">
                          <input name="surakuan" type="file" id="input-surakuan" class="custom-file-inputform-control form-control-alternative" placeholder="" value="" required="" autofocus="">
                              <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                      </div>
                  </div>   -->                                                           

                  <div class="text-right ol-sm-12 col-md-12">
                      <button id="apply_btn" type="submit" class="btn btn-primary mt-4">Simpan</button>
                  </div>

               @csrf
              </form> 
              </div>
            </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>

      </div>
    </div>
  </div>
@endsection
