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
    #logo2{
      display: none;
    }
    #s_title{
      font-size: 22px;
    }
    .row1{
      height: 250px;
    }
    .slider{
      height: 280px;
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
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <div class="spacer">
    <header id="header" class="clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html"><img src="{{ asset('images/logo.png') }}"></a>&nbsp;&nbsp; <marquee width="610px" align="centre" ><font color="#fff307" id="s_title">ေဇတ၀န္ဓမၼာရုံေက်ာင္းတုိက္</font></marquee>&nbsp; &nbsp;<img src="{{ asset('images/logo.png') }}" id="logo2"></h1>
      </div>
      <!-- ################################################################################################ -->
    </header>
  </div>
</div>

<!-- ################################################################################################ -->
<div class="wrapper row2">
   <!-- mobile nav -->
<div class="topnav" id="myTopnav">
    <a href="" title="">Menu</a>
    <a href="{{route('user.category', ['category' => 'home'])}}">မူလစာမ်က္ႏွာ</a>
    <a class="drop" href="{{ route('user.category.sub', ['category' => 'thatharnar', 'sub' => 'thatharnar1']) }}"">သာသနာျပဳလုပ္ငန္းစဥ္မ်ား</a>
    <a href="{{ route('user.category.sub', ['category' => 'thatharnar', 'sub' => 'thatharnar2']) }}"">သာသနာျပဳစြမ္းရည္ ျမွင့္တင္ေရးသင္တန္း</a>
    <a href="{{ route('user.category.sub', ['category' => 'books', 'sub' => 'book1']) }}">ေဒါက္တာအရွင္ေသာပါက ေရးသားေသာစာအုပ္မ်ား</a>
    <a href="{{ route('user.category.sub', ['category' => 'books', 'sub' => 'book2']) }}">ေဒါက္တာေသာပါက၏ ေနာက္ဆုံးေရးေဆာင္ပါးမ်ား</a>
    <a class="drop" href="{{ route('user.category.sub', ['category' => 'parahita', 'sub' => 'parahita1']) }}">ပရဟိတအက်ိဳးေဆာင္အဖဲြ႕</a>
    <a href="{{ route('user.category.sub', ['category' => 'parahita', 'sub' => 'pyinnyardarna']) }}">ေဇတ၀န္ပညာဒါန အခမဲ့ကြန္ပ်ဴတာသင္တန္းမ်ား</a>
    <a href="{{route('user.category', ['category' => 'Gallery'])}}">ဓာတ္ပုံမွတ္တမ္းမ်ား</a>
    <a href="{{route('user.category', ['category' => 'news'])}}">သတင္းႏွင့္ထုတ္ျပန္ေရးသားခ်က္မ်ား</a>
    <a href="{{route('user.category', ['category' => 'contact'])}}">ဆက္သြယ္ရန္</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
  <div class="spacer" id="spacer">
    <!-- ################# Desktop nav##################### -->
     <!-- <div id=" desktopnav" class="navbar-collapse collapse">  -->
      <div id="desktopnav" class="navbar-collapse collapse">
        <nav id="mainav" class="clear"> 
        <!-- ################################################################################################ -->
          <ul class="clear">
            <li class="active"><a href="{{route('user.category', ['category' => 'home'])}}">မူလစာမ်က္ႏွာ</a></li>
            <li><a class="drop" href="{{ route('user.category.sub', ['category' => 'thatharnar', 'sub' => 'thatharnar1']) }}"">သာသနာျပဳလုပ္ငန္းစဥ္မ်ား</a>
              <ul>
                <li><a href="{{ route('user.category.sub', ['category' => 'thatharnar', 'sub' => 'thatharnar2']) }}"">သာသနာျပဳစြမ္းရည္ ျမွင့္တင္ေရးသင္တန္း</a></li>
                <!-- <li><a href="pages/gallery.html">စာသင္တုိက္ စာသင္သားမ်ားဆုိင္ရာ</a></li> -->
              </ul>
            </li>
            <li><a class="drop" href="#">စာအုပ္မ်ား</a>
              <ul>
                <li><a href="{{ route('user.category.sub', ['category' => 'books', 'sub' => 'book1']) }}">ေဒါက္တာအရွင္ေသာပါက ေရးသားေသာစာအုပ္မ်ား</a></li>
                <li><a href="{{ route('user.category.sub', ['category' => 'books', 'sub' => 'book2']) }}">ေဒါက္တာေသာပါက၏ ေနာက္ဆုံးေရးေဆာင္ပါးမ်ား</a></li>
              </ul>
            </li>

            <li><a class="drop" href="{{ route('user.category.sub', ['category' => 'parahita', 'sub' => 'parahita1']) }}">ပရဟိတအက်ိဳးေဆာင္အဖဲြ႕</a>
              <ul>
                <li><a href="{{ route('user.category.sub', ['category' => 'parahita', 'sub' => 'pyinnyardarna']) }}">ေဇတ၀န္ပညာဒါန အခမဲ့ကြန္ပ်ဴတာသင္တန္းမ်ား</a></li>
              </ul>
            </li>
            <li><a href="{{route('user.category', ['category' => 'Gallery'])}}">ဓာတ္ပုံမွတ္တမ္းမ်ား</a></li>
            <li><a href="{{route('user.category', ['category' => 'news'])}}">သတင္းႏွင့္ထုတ္ျပန္ေရးသားခ်က္မ်ား</a></li>
            <li><a href="{{route('user.category', ['category' => 'contact'])}}">ဆက္သြယ္ရန္</a></li>
          </ul>
        <!-- ################################################################################################ -->
        </nav>
     </div> 
  </div>
</div>
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