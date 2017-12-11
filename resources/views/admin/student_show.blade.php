@extends('admin.layout')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

    <div id="content" class="bodylayout"><!-- second common-->
        <h1 align="center">ကြန္ပ်ဴတာသင္တန္းသားအခ်က္အလက္မ်ား</h1><br>
        <br>
            <form>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">အမည္ </label>
                <div class="col-sm-10">
                  :&nbsp;&nbsp; {{$post->name}}
                </div>
              </div>

              <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ႏုိင္ငံသားစီစစ္ေရး</label>
                    <div class="col-sm-10">
                      :&nbsp;&nbsp; {{$post->nrc}}
                    </div>
              </div>

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">အဖအမည္</label>
                <div class="col-sm-10">
                  :&nbsp;&nbsp; {{$post->f_name}}
                </div>
              </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">အမိအမည္</label>
                    <div class="col-sm-10">
                      :&nbsp;&nbsp; {{$post->m_name}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">လူမ်ိဳး</label>
                    <div class="col-sm-10">
                      :&nbsp;&nbsp; {{$post->race}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ကိုးကြယ္သည့္ဘာသာ</label>
                    <div class="col-sm-10">
                      :&nbsp;&nbsp; {{$post->reg}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ေနရပ္လိပ္စာ</label>
                    <div class="col-sm-10">
                      :&nbsp;&nbsp; {{$post->address}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">တကၠသိုလ္၀င္တန္း ေအာင္ျမင္ခဲ့သည့္ ခုႏွစ္သကၠရာဇ္ႏွင့္ ေအာင္ျမင္ခဲ့သည့္ေက်ာင္းအမည္</label>
                    <div class="col-sm-10">
                      :&nbsp;&nbsp; {{$post->passed_date_school}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ယခင္ႏွစ္က ဤသင္တန္းေက်ာင္းတြင္ တက္ေရာက္ဖူးသည္ / မတက္ေရာက္ဖူးပါ </label>
                    <div class="col-sm-10">
                      :&nbsp;&nbsp; {{$post->is_attend}}
                    </div>
                </div>


                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ဆက္သြယ္ရန္ဖုန္း</label>
                    <div class="col-sm-10">
                      :&nbsp;&nbsp; {{$post->phone_no}}
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