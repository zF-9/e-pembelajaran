<!DOCTYPE html>
<html lang="en">

<head>

  @include('template.head')

</head>

<body id="page-top">


      <!-- Main Content -->
      <div id="content">

        @include('template.navbar')

        @yield('content')

      </div>
      <!-- End of Main Content -->

      @include('template.footer')
    
</body>

</html>