@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
<style type="text/css">
.alert-success{
  display: block;
  background: #efefef;
  color: green;
}
</style>
@endsection

@section('content')

<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content three_quarter first"> 
        <!-- ################################################################################################ -->
        <!-- for success message -->
        @if ($message = Session::get('success'))
          <div class="alert-success" style=" display: block; background: #efefef;
  color: green; ">
              <p >{{ $message }}</p>
          </div>
         @endif
        <div id="comments">
          <h2>Write A Comment</h2>
          <form method="POST" action="{{ route('contact.store') }}">
            {!! csrf_field() !!}
            <div class="one_third first">
              <label for="name">Name <span>*</span></label>
              <input type="text" name="name" id="name" value="{{old('name') }}" size="22">
              @if ($errors->has('name'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third">
              <label for="email">Mail <span>*</span></label>
              <input type="email" name="email" id="email" value="{{old('email') }}" size="22">
              @if ($errors->has('email'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third">
              <label for="url">Website</label>
              <input type="url" name="url" id="url" value="{{old('url')}}" size="22" placeholder="Example https://www.google.com">
            </div>
            <div class="block clear">
              <label for="comment">Your Comment</label>
              <textarea name="comment" id="comment" cols="25" rows="10">{{old('comment')}}</textarea>
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
        @include('sidebar')
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>

@endsection

@section('scripts')
@parent
<!-- your custom script here -->
<script>
  $('.alert-success').fadeIn().delay(5000).fadeOut();
</script>
@endsection