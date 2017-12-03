<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Baho</title>

     <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/jpeg">
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/jpeg">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css') }}">
    <style type="text/css" media="screen">
      .catg_title{color:#9b0c15 ;}
    </style>
    @show

    <script type="text/javascript">
      ImageArray = new Array("{{ asset('images/1.jpeg') }}","{{ asset('images/2.jpeg') }}","{{ asset('images/3.jpeg') }}");
      CurrentImage = 0;
      ImageCount = ImageArray.length;
      function RotateBanner()
      {
        if(document.images)
        {
          CurrentImage++;
          if(CurrentImage==ImageCount)
          {
            CurrentImage=0;
          }
          document.Banner.src=ImageArray[CurrentImage];
          setTimeout("RotateBanner()",2000)
        }
      }
    </script>
</head>
<body onload="RotateBanner()">
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<div class="container">

@include('layouts.common.header')

@yield('content')

@include('layouts.common.footer')

</div>


@section('scripts')
<script src="{{ asset('js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/wow.min.js') }}"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/slick.min.js') }}"></script> 
<script src="{{ asset('js/jquery.li-scroller.1.0.js') }}"></script> 
<script src="{{ asset('js/jquery.newsTicker.min.js') }}"></script> 
<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script> 
<script src="{{ asset('js/custom.js') }}"></script>
@show

</body>
</html>
