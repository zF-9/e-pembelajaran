  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="/">E-PEMBELAJARAN.</a>
      </div>
      <div class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav">
          @guest
              <li class=""><a href="/">UTAMA</a></li>
              <li><a href="/about">INFO</a></li>
              <li><a href="/contact">HUBUNGI KAMI</a></li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('LOG MASUK') }}</a>
              </li>
                @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('DAFTAR MASUK') }}</a>
                  </li>
                @endif
              @else
              <!--<li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-transform:uppercase">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    LOG KELUAR
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>

                <a href="#logoutModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a>
              </li>-->
              <li class=""><a href="/home-page">UTAMA</a></li>
              <li><a href="/about">INFO</a></li>
              <li><a href="/contact">HUBUNGI KAMI</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">DIREKTORI <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/blog">KATEGORI</a></li>
                  <li><a href="/single-post">ARTIKEL</a></li>
                  <li><a href="/list-course">SENARAI KURSUS</a></li>
                  <li><a href="/portfolio">GALERI</a></li>
                  <li><a href="/single-project">PROJEK</a></li>
                </ul>
              </li>
              <li><a href="/upload">MUAT NAIK</a></li>
              <li class="dropdown">
                <a style="text-transform:uppercase" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ old('name', auth()->user()->name) }}</span>
                  <img class="img-profile rounded-circle" style="border-radius:50%" width="25" height="25" src="/storage/profile_img/{{ old('name', auth()->user()->avatar) }}">
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="/profile">PROFIL</a></li>
                  <li><a href="#logoutModal" data-toggle="modal">LOG KELUAR</a></li>
                </ul>
              </li>
              @endguest
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

