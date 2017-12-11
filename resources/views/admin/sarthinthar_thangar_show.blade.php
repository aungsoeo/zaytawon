@extends('admin.layout')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

    <div id="content" class="bodylayout"><!-- second common-->
        <h1 align="center">စာသင္သားသံဃာအခ်က္အလက္မ်ား</h1><br>
        <br>
            <form>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">ေလွ်ာက္ထားသူ၏ ဘဲြ႔အမည္ </label>
                <div class="col-sm-8">
                  :&nbsp;&nbsp; {{$post->degree}}
                </div>
              </div>

              <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">အသက္</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->age}} (နွစ္)
                    </div>
                </div>

              <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">သိကၡာ</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->war_taw}} (ဝါ)
                    </div>
              </div>

              <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">ေမြးသကၠရာဇ္</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->birth_date}}
                    </div>
              </div>

              <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">ေမြးရပ္ဇာတိ</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->birth_place}}
                    </div>
              </div>

               <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">သာသနာ၀င္မွတ္တမ္းအမွတ္</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->thatharnar_no}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">မူလသီတင္းသုံးရာေက်ာင္းတုိက္ ေနရပ္လိပ္စာ</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->live_monastery}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">ဥပဇၥ်ယ္ဆရာေတာ္ဘြဲ႔အမည္ႏွင့္ ေနရပ္လိပ္စာ</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->teacher_name_address}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">ေနထုိင္ခဲ့ဘူးေသာေက်ာင္းတုိက္မ်ား</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->lived_monastery}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">ေနာက္ဆုံးေနထုိင္ပညာသင္ၾကားခဲ့ေသာ ေက်ာင္းတုိက္ႏွင့္လိပ္စာ</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->learned_monastery}}
                    </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-4 col-form-label">အဘအမည္ႏွင့္ ေနရပ္လိပ္စာ</label>
                  <div class="col-sm-8">
                    :&nbsp;&nbsp; {{$post->f_name}}၊ {{$post->f_address}}
                  </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္ အစုိးရစာေမးပဲြ</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->passed_gov_sch}}
                    </div>
                </div>

            </form>
    </div>
</div>

@endsection

@section('scripts')
@parent
<!-- your custom script here -->
@endsection