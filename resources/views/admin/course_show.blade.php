@extends('admin.layout')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

    <div id="content" class="bodylayout"><!-- second common-->
        <h1 align="center">သင္တန္းသားအခ်က္အလက္မ်ား</h1><br>
        <br>
            <form>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">သင္တန္းသားဘြဲ႔ေတာ္ </label>
                <div class="col-sm-8">
                  :&nbsp;&nbsp; {{$post->degree}}
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">အဖအမည္</label>
                <div class="col-sm-8">
                  :&nbsp;&nbsp; {{$post->f_name}}
                </div>
              </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">သာသနာ၀င္မွတ္တမ္းအမွတ္</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->thatharnar_no}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">ေမြးသကၠရာဇ္</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->birth_date}}
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
                    <label for="inputPassword" class="col-sm-4 col-form-label">ေက်ာင္းတုိက္ႏွင့္ေနရပ္လိပ္စာအျပည့္အစုံ</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->school_address}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">ဆက္သြယ္ရန္ဖုန္း (Viber ဆက္သြယ္၍ရေသာဖုန္း)</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->phone}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">E-mail ႏွင့္ Facebook</label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->email}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">ဓမၼာစရိယဘဲြ႔ရရွိသည့္ ခုႏွစ္သကၠရာဇ္ </label>
                    <div class="col-sm-8">
                      :&nbsp;&nbsp; {{$post->passed_date}}
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