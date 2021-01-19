<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="{{url('public')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="{{url('public')}}/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{url('public')}}/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="{{url('public')}}/vendor/owl.carousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="{{url('public')}}/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="{{url('public')}}/css/custom.css">
    <link rel="shortcut icon" href="{{url('public')}}/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('public')}}/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="{{url('public')}}/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('public')}}/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('public')}}/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('public')}}/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('public')}}/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('public')}}/img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('public')}}/img/apple-touch-icon-152x152.png">
  </head>
  <body>
    <div id="all">
      @include('templateClient.section.topbar')
      @include('templateClient.section.header')
      @include('templateClient.section.heading')
      <div id="content">
        <div class="container">
          <div class="row bar">
            @yield('content')
          </div>
        </div>
      </div>
      @include('templateClient.section.footer')
    </div>
    <script src="{{url('public')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('public')}}/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="{{url('public')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{url('public')}}/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="{{url('public')}}/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="{{url('public')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{url('public')}}/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="{{url('public')}}/js/jquery.parallax-1.1.3.js"></script>
    <script src="{{url('public')}}/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="{{url('public')}}/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="{{url('public')}}/js/front.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @stack('script')
  </body>
</html>