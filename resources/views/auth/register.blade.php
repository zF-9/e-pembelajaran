@extends('template.logpage')
@push('styles')
    <link href="{{ asset('css/login-register.css') }}" rel="stylesheet">
@endpush
@section('content')
<body>
  <div class="container">
   <section id="formHolder">

      <div class="row">
                <!-- Brand Box -->
                <div class="col-sm-6 brand">
                    <a href="#" class="logo">JPANS <span>.</span></a>

                    <div class="heading">
                    <h1>Portal E-Pembelajaran JPANS</h1>
                    <p>Portal Pengetahuan Anda</p>
                    </div>

                    <div class="success-msg">
                    <p>Tahniah, pendaftaran anda telah diterima</p>
                    <a href="#" class="profile">Your Profile</a>
                    </div>
                </div>


      <!-- Form Box -->
         <div class="col-sm-6 form">

            <!-- Login Form -->
            <div class="login form-peice switched">
               <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                     <label for="loginemail">Alamat Email</label>
                     <input id="loginemail" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">                  
                  </div>

                  <div class="form-group">
                     <label for="password">Kata Laluan</label>
                     <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  </div>

                  <div class="CTA">
                     <input type="submit" value="Log Masuk">
                     <a href="#" class="switch">DAFTAR MASUK</a>
                  </div>
               </form>
            </div><!-- End Login Form -->


            <!-- Signup Form -->
            <div class="signup form-peice">
               <form class="signup-form" method="POST" action="{{ route('register') }}">
                    @csrf

                  <div class="form-group">
                     <label for="name">Nama Penuh</label>
                     <input id="name" type="text" class="name  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email">Alamat Email</label>
                     <input id="email" type="email" class="email  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="phone">Numbor Telefon- <small>Optional</small></label>
                     <input type="text" name="phone" id="phone">
                  </div>

                  <div class="form-group">
                     <label for="password">Kata Laluan</label>
                     <input id="password" type="password" class="pass  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="passwordCon">Ulang Kata Laluan</label>
                     <input id="passwordCon" type="password" class="passConfirm" name="password_confirmation" required autocomplete="new-password">
                     <span class="error"></span>
                  </div>

                  <div class="CTA">
                     <input type="submit" value="Daftar Masuk" id="submit">
                     <a href="#" class="switch">LOG MASUK</a>
                  </div>


                </form>
            </div><!-- End Signup Form -->
         </div>
      </div>

   </section>

</div>
@endsection