<!DOCTYPE html>
<html lang="en">

<head>

  @include('template.head')
  

</head>

<body id="page-top">


      <!-- Main Content -->
      <div id="content">

        @include('template.navbar')
        @stack('styles')
        @yield('content')

      </div>
      <!-- End of Main Content -->
      
      @include('template.footer')
    
</body>
@stack('scripts')
</html>