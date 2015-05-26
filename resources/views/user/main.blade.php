<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Vision SiS | @yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/dist/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skin -->
    <link href="{{ asset('/dist/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css" />
  </head>
  
  @yield('body')
    <div class="wrapper">

      @include('user.partials._header')
      
      @include('user.partials._sidebar')

      @yield('content')

      @include('user.partials._footer')

    </div><!-- ./wrapper -->

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/dist/js/app.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/plugins/fastclick/fastclick.js') }}" type="text/javascript"></script>

  </body>
</html>