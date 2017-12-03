<!DOCTYPE html>
<html>
<head>
<title>NewsFeed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="css/animate.css"> -->
<link rel="stylesheet" type="text/css" href="css/font.css">
<!-- <link rel="stylesheet" type="text/css" href="css/li-scroller.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="css/slick.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css"> -->
<link rel="stylesheet" type="text/css" href="css/theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onload="RotateBanner()">
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <a href="index.php" class="logo"><img src="images/logo.jpeg" alt="" height="200px" width="1200px"></a>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li><a href="index.php"><span>ပင္မစာမ်က္ႏွာ</span></a></li>
         <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ဆရာေတာ္ၾကီးစာအုပ္မ်ား</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="book1.php">အဘိဓမၼာပုိ႔ခ်ခ်က္မ်ား</a></li>
              <li><a href="book2.php">ၾသ၀ါဒမ်ား</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ဂ်ာနယ္မ်ား</a>
            <ul class="dropdown-menu" role="menu">
              <li class="active"><a href="journal1.php">သာကီေသြး</a></li>
              <li><a href="journal2.php">ေအာင္ေဇယ်တု</a></li>
            </ul>
          </li>
          <li><a href="photo.php">လႈပ္ရွားမႈဓာတ္ပုံမ်ား</a></li>
          <li><a href="news.php">သတင္းမ်ား</a></li>
          <li><a href="form.php">၀င္ခြင့္ေဖာင္</a></li>
          <li><a href="nation.php">တုိင္းေဒသၾကီးအဖြဲ႔(၁၄)ခု</a></li>
           <li><a href="poem.php">ကဗ်ာ/ေဆာင္းပါမ်ား</a></li>
          <li><a href="contact.php">ဆက္သြယ္ရန္</a></li>
        </ul>
      </div>
    </nav>
  </section>
  
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">          
          <div class="single_post_content">
            <h2>သာကီေသြး ဂ်ာနယ္မ်ား</h2>
             <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img2.jpg" alt=""/></a> </figure>
                  <h4>Book Name</h4>
                  <h2>Download</h2>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a  href="#"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                  <h4>Book Name</h4>
                  <h2>Download</h2>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                  <h4>Book Name</h4>
                  <h2>Download</h2>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                  <h4>Book Name</h4>
                  <h2>Download</h2>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img2.jpg" alt=""/> </a> </figure>
                  <h4>Book Name</h4>
                  <h2>Download</h2>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                  <h4>Book Name</h4>
                  <h2>Download</h2>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    <div class="col-lg-4 col-md-4 col-sm-4">
      <aside class="right_content">
        <div class="latest_post">
          <h2>အလွဴရွင္မ်ား</h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore . </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore . </p>
                  </div>
                </div>
              </li>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </aside>
    </div>

      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2>လုပ္ငန္းစဥ္မ်ား</h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title">U Mg Mg</a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> U Aung</a> </div>
                   <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> U Hla</a> </div>
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> U Soe</a> </div>
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
              </li>
            </ul>
          </div>   
          <div class="single_sidebar wow fadeInDown">             
              <h2>ရည္ရြယ္ခ်က္</h2>
              <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  
         </div>
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>တည္ေထာင္သူမ်ား</h2>
             <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title">U Mg Mg</a><p>Lorem ipsum dolor sit amet, consectetur</p></div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> U Aung</a><p>Lorem ipsum dolor sit amet, consectetur</p> </div>                   
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> U Hla</a> <p>Lorem ipsum dolor sit amet, consectetur</p></div>                  
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> U Soe</a> <p>Lorem ipsum dolor sit amet, consectetur</p></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="index.php">ပင္မစာမ်က္ႏွာ</a></li>
              <li><a href="#">ဆရာေတာ္ၾကီးစာအုပ္မ်ား</a></li>
              <li><a href="#">ဂ်ာနယ္မ်ား</a></li>
              <li><a href="photo.php">လႈပ္ရွားမႈဓာတ္ပုံမ်ား</a></li>
              <li><a href="news.php">သတင္းမ်ား</a></li>
              <li><a href="form.php">၀င္ခြင့္ေဖာင္</a></li>
              <li><a href="nation.php">တုိင္းေဒသၾကီးအဖြဲ႔(၁၄)ခု</a></li>
              <li><a href="poem.php">ကဗ်ာ/ေဆာင္းပါမ်ား</a></li>
              <li><a href="contact.php">ဆက္သြယ္ရန္</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>CONTACT</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Developed By 5 Pros</p>
    </div>
  </footer>
</div>
<script src="js/jquery.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/slick.min.js"></script> 
<script src="js/jquery.li-scroller.1.0.js"></script> 
<script src="js/jquery.newsTicker.min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>