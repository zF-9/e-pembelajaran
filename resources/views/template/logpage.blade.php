<!DOCTYPE html>
<html lang="en">

<head>

  @include('template.head')
  @stack('styles')

</head>

<body id="page-top">


      <!-- Main Content -->
      <div id="content">

        @yield('content')
      </div>
      <!-- End of Main Content -->

      
      @include('template.footer')
    
</body>
@stack('scripts')
</html>