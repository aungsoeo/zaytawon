<!-- ################################################################################################ -->
<div class="wrapper row1">
  <div class="spacer">
    <header id="header" class="clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html"><img src="{{ asset('images/logo.png') }}"></a>&nbsp;&nbsp; <marquee width="610px" align="centre"><font color="#fff307">ေဇတ၀န္ဓမၼာရုံေက်ာင္းတုိက္</font></marquee>&nbsp; &nbsp;<img src="{{ asset('images/logo.png') }}"></h1>
      </div>
      <!-- ################################################################################################ -->
    </header>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="spacer" id="spacer">
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
