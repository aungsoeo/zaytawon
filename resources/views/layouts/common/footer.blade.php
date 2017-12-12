<div class="wrapper row5">
  <div class="spacer">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <h6 class="title">ဆက္သြယ္ရန္</h6>
        <address class="btmspace-15">
        ေဇတ၀န္ဓမၼာရုံေက်ာင္းတုိက္<br>
        (ေဇတ၀န္ ပရိယတၱိ ပဋိပတၱိႏွင့္ ပရဟိတစင္တာ)<br>
        ျမသီတာရပ္ကြက္ (ဘိျခံ)၊ မဂၤလာဒုံ<br>
        ရန္ကုန္
        </address>
        <ul class="nospace">
          <li class="btmspace-10"><span class="fa fa-phone"></span> +00 (123) 456 7890</li>
          <li><span class="fa fa-envelope-o"></span> info@domain.com</li>
        </ul>
      </div>
      <div class="one_third">
        <h6 class="title">Contact</h6>
        <address class="btmspace-15">
          Jetavam Dhammayone Monestery<br>
          (Jetavam Pariyatti Patipatti and Parahita center)<br>
          Myathida Quarter (BoChan), Mingalardon Township<br>
          Yangon, Myanmar
        </address>
      </div>
      <div class="one_third">
        <h6 class="title">Grab Our Newsletter</h6>
        <form method="POST" action="{{ route('grab_news.store') }}">
          {!! csrf_field() !!}
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text"  name="name"  value="{{old('name')}}" placeholder="Name">
            @if ($errors->has('name'))
                  <span class="help-block" style="color: #0e6ca1">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            <input class="btmspace-15" type="text"  name="email" value="{{old('email')}}" placeholder="Email">
              @if ($errors->has('email'))
                  <span class="help-block" style="color: #0e6ca1">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div class="spacer">
    <div id="copyright" class="clear"> 
      <!-- ################################################################################################ -->
      <!-- <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p> -->
      <p class="fl_right">Created by 5Pros Software & Developing Co.,Ltd</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>