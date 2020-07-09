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