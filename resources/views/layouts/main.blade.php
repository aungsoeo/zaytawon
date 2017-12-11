<!DOCTYPE html>
<html>
<head>
<title>ZAYTAWON</title>
<meta charset="utf-8">
<link rel="shortcut icon" href="{{ asset('/favicon.png') }}" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="{{ asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css') }}">
    <style type="text/css" media="screen">
      .catg_title{color:#9b0c15 ;}
    </style>
</head>
<body id="top" class="bgded fixed">

@include('layouts.common.header')

@yield('content')

@include('layouts.common.footer')


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
@section('scripts')
<script src="{{ asset('layout/scripts/jquery.min.js')}}"></script>
<script src="{{ asset('layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{ asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
<script src="{{ asset('layout/scripts/jquery.placeholder.min.js')}}"></script>

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
