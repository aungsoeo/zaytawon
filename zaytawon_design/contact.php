<!DOCTYPE html>
<html>
<head>
<title>ZAYTAWON</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" class="bgded fixed">
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <div class="spacer">
    <header id="header" class="clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html"><img src="images/logo.png"></a>&nbsp;&nbsp; <marquee width="560px" align="centre"><font color="#fff307">ေဇတ၀န္ဓမၼာရုံေက်ာင္းတုိက္</font></marquee>&nbsp; &nbsp;<img src="images/logo.png"></h1>
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
        <li><a href="index.php">မူလစာမ်က္ႏွာ</a></li>
        <li><a class="drop" href="tharthanar1.php">သာသနာျပဳလုပ္ငန္းစဥ္မ်ား</a>
          <ul>
            <li><a href="tharthanar2.php">သာသနာျပဳစြမ္းရည္ ျမွင့္တင္ေရးသင္တန္း</a></li>
            <!-- <li><a href="pages/gallery.html">စာသင္တုိက္ စာသင္သားမ်ားဆုိင္ရာ</a></li> -->
          </ul>
        </li>
        <li><a class="drop" href="#">စာအုပ္မ်ား</a>
          <ul>
            <li><a href="books1.php">ေဒါက္တာအရွင္ေသာပါက ေရးသားေသာစာအုပ္မ်ား</a></li>
            <li><a href="books2.php">ေဒါက္တာေသာပါက၏ ေနာက္ဆုံးေရးေဆာင္ပါးမ်ား</a></li>
          </ul>
        </li>
        <li><a class="drop" href="parahita1.php">ပရဟိတအက်ိဳးေဆာင္အဖဲြ႕</a>
          <ul>
            <li><a href="parahita2.php">ေဇတ၀န္ပညာဒါန အခမဲ့ကြန္ပ်ဴတာသင္တန္းမ်ား</a></li>
          </ul>
        </li>
        <li><a href="photo.php">ဓာတ္ပုံမွတ္တမ္းမ်ား</a></li>
        <li><a href="news.php">သတင္းႏွင့္ထုတ္ျပန္ေရးသားခ်က္မ်ား</a></li>
        <li class="active"><a href="contact.php">ဆက္သြယ္ရန္</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
</div>

<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content three_quarter first"> 
        <!-- ################################################################################################ -->
        <div id="comments">
          <h2>Write A Comment</h2>
          <form action="#" method="post">
            <div class="one_third first">
              <label for="name">Name <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="email">Mail <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>
            <div class="one_third">
              <label for="url">Website</label>
              <input type="text" name="url" id="url" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">Your Comment</label>
              <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
            </div>
            <div>
              <input name="submit" type="submit" value="Submit Form">
              &nbsp;
              <input name="reset" type="reset" value="Reset Form">
            </div>
          </form>
        </div>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <div class="sidebar one_quarter"> 
        <!-- ################################################################################################ -->
         <div class="sdb_holder">
          <a href="education.php"><h6><i class="icon circle fa fa-bank"></i>&nbsp;စာသင္တုိက္ စာသင္သား မ်ားဆုိင္ရာ</h6></a>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        </div>
        <hr>
        <br>
        <div class="sdb_holder">
          <article>
            <a href="donars.php"><h6><i class="icon circle fa fa-book"></i> &nbsp;ႏွစ္စဥ္ရာသက္ပန္ေန႔ဆြမ္း အလွဴရွင္မ်ား</h6></a>
            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          </article>
        </div>
        <hr>
        <br>
        <div class="sdb_holder">
          <article>
            <a href="people.php"><h6><i class="fa fa-location-arrow"></i> &nbsp;တရားပဲြပင့္ေလွ်ာက္လုိ သူမ်ား</h6></a>
            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          </article>
        </div>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<?php include("footer.php"); ?>