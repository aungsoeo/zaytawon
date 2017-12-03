<style>
@media screen and (min-width: 600px) {
    .topnav {
        display:none;
    }
}

@media screen and (max-width: 600px) {
    #desktopnav{
        display:none;
    }
}

.topnav {
  overflow: hidden;
  background-color: #9b0c15;
}

.topnav a {
  float: left;
  display: block;
  color: #D8D00D;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>
<header id="header">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="header_bottom">
        <a href="{{ route('user.index') }}"" class="logo"><img src="{{ asset('images/logo.jpeg') }}" alt="" height="200px" width="1200px"></a>
      </div>
    </div>
  </div>
</header>

<section id="navArea">
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="topnav" id="myTopnav">
      <a href="{{ route('user.index') }}"><span>ပင္မစာမ်က္ႏွာ</span></a>
       <a href="{{route('user.category', ['category' => 'history'])}}" >သမိုင္း</a>
      <a href="{{ route('user.category.sub', ['category' => 'SayardawBook', 'sub' => 'Abidama']) }}">အဘိဓမၼာပုိ႔ခ်ခ်က္မ်ား</a>
      <a href="{{ route('user.category.sub',['category'=>'SayardawBook','sub'=>'AuWada']) }}">ၾသ၀ါဒမ်ား</a>

      <a href="{{route('user.category.sub', ['category' => 'Journals', 'sub' => 'tharkithawe'])}}">သာကီေသြး</a>
     <!--  <a href="{{route('user.category.sub', ['category' => 'Journals', 'sub' => 'aungzayartu'])}}">ေအာင္ေဇယ်တု</a> -->
      <a href="{{route('user.category.sub', ['category' => 'Journals', 'sub' => 'myanmarudan'])}}">ျမန္မာဥဒါန္း</a>
      <a href="{{route('user.category.sub', ['category' => 'Journals', 'sub' => 'pyichitthar'])}}">ျပည္ခ်စ္သား</a>
      <a href="{{route('user.category', ['category' => 'poem'])}}">ကဗ်ာ/ေဆာင္းပါမ်ား</a>
              
      <a href="{{ route('user.category.sub', ['category' => 'Gallery','sub' => 'photos']) }}">ဓာတ္ပုံမ်ား</a>
      <a href="{{ route('user.category.sub',['category'=>'Gallery','sub'=>'videos']) }}">ဗီဒီယိုဖိုင္မ်ား</a>
            
      <a href="{{route('user.category', ['category' => 'news'])}}">သတင္းမ်ား</a>
           
      <!-- <a href="{{route('user.category', ['category' => 'form'])}}">၀င္ခြင့္ေဖာင္</a> -->
      <a href="{{route('user.category', ['category' => 'statement'])}}">ထုတ္ျပန္ခ်က္မ်ား</a>     
      <a href="{{route('user.category', ['category' => 'nation'])}}">တုိင္းေဒသၾကီးမ်ား</a>
            
       <a href="{{route('user.category', ['category' => 'amhyotharbook'])}}" >အမ်ိဳးသားေရးစာအုပ္မ်ား</a>
           
      <a href="{{route('user.category', ['category' => 'contact'])}}">ဆက္သြယ္ရန္</a>
          
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <div id="navbar desktopnav" class="navbar-collapse collapse">
      <ul class="nav navbar-nav main_nav">
        <li @if (Request::is('/*')) class="active" @endif>
          <a href="{{ route('user.index') }}"><span>ပင္မစာမ်က္ႏွာ</span></a>
        </li>
        <li>
           <a href="{{route('user.category', ['category' => 'history'])}}" >သမိုင္း</a>
        </li>
        <li @if (Request::is('show/SayardawBook/Abidama')) class="active" @elseif (Request::is('show/Journals/AuWada')) class="active" @endif> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ဆရာေတာ္ၾကီးစာအုပ္မ်ား</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('user.category.sub', ['category' => 'SayardawBook', 'sub' => 'Abidama']) }}">အဘိဓမၼာပုိ႔ခ်ခ်က္မ်ား</a></li>
            <li><a href="{{ route('user.category.sub',['category'=>'SayardawBook','sub'=>'AuWada']) }}">ၾသ၀ါဒမ်ား</a></li>
          </ul>
        </li>
        <li @if (Request::is('show/Journals/tharkithawe')) class="active" @elseif (Request::is('show/Journals/myanmarudan')) class="active" @elseif (\Request::is('show/pyichitthar'))  class="active" @elseif (\Request::is('show/poem'))  class="active" @endif > 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ဂ်ာနယ္မ်ား</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('user.category.sub', ['category' => 'Journals', 'sub' => 'tharkithawe'])}}">သာကီေသြး</a></li>
            <!-- <li><a href="{{route('user.category.sub', ['category' => 'Journals', 'sub' => 'aungzayartu'])}}">ေအာင္ေဇယ်တု</a></li> -->
            <li>
              <a href="{{route('user.category.sub', ['category' => 'Journals', 'sub' => 'myanmarudan'])}}">ျမန္မာဥဒါန္း</a>
            </li>
            <li>
             <a href="{{route('user.category.sub', ['category' => 'Journals', 'sub' => 'pyichitthar'])}}">ျပည္ခ်စ္သား</a>
            </li>
            <li > 
              <a href="{{route('user.category', ['category' => 'poem'])}}">ကဗ်ာ/ေဆာင္းပါမ်ား</a>
            </li>
          </ul>
        </li>
    <!--     <li @if (Request::is('show/Gallery')) class="active" @endif>
          <a href="{{route('user.category', ['category' => 'Gallery'])}}">ဓာတ္ပုံမ်ား</a>
        </li> -->
        <li @if (Request::is('show/Gallery/photos')) class="active" @elseif (Request::is('show/Gallery/videos')) class="active" @endif> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ဓာတ္ပုံမ်ား</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('user.category.sub', ['category' => 'Gallery','sub' => 'photos']) }}">ဓာတ္ပုံမ်ား</a></li>
            <li><a href="{{ route('user.category.sub',['category'=>'Gallery','sub'=>'videos']) }}">ဗီဒီယိုဖိုင္မ်ား</a></li>
          </ul>
        </li>
        <li @if (\Request::is('show/news'))  class="active" @endif>
          <a href="{{route('user.category', ['category' => 'news'])}}">သတင္းမ်ား</a>
        </li>
<!--         <li @if (\Request::is('show/form'))  class="active" @endif>
          <a href="{{route('user.category', ['category' => 'form'])}}">၀င္ခြင့္ေဖာင္</a>
        </li> -->
        <li @if (\Request::is('show/nation'))  class="active" @endif>
          <a href="{{route('user.category', ['category' => 'statement'])}}">ထုတ္ျပန္ခ်က္မ်ား</a>
        </li>
        <li @if (\Request::is('show/nation'))  class="active" @endif>
          <a href="{{route('user.category', ['category' => 'nation'])}}">တုိင္းေဒသၾကီးမ်ား</a>
        </li>
         <li @if (\Request::is('show/amhyotharbook'))  class="active" @endif>
          <a href="{{route('user.category', ['category' => 'amhyotharbook'])}}" >အမ်ိဳးသားေရးစာအုပ္မ်ား</a>
        </li>
        <li @if (\Request::is('show/contact'))  class="active" @endif>
          <a href="{{route('user.category', ['category' => 'contact'])}}">ဆက္သြယ္ရန္</a>
        </li>
      </ul>
    </div>
  </nav>
</section>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>