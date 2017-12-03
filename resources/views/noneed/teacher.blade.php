@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')
<!-- ################################################################################################ -->
<div class="nextfooter">
   <div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 

     <div id="content" class="three_quarter first"> 
       
        <h2>Teachers</h2>
         @foreach($subcat as $s)
          <font size="4px">{{$s->title}}</font>
          <div class="scrollable">
          <table>
            <thead>
              <tr>
                <th>Subjects</th>
                <th>Teachers</th>
              </tr>
            </thead>
            <tbody>
                @foreach($s->post as $t)
                <tr>
                  <td>{{$t->title}}</td>
                  <td>{{$t->custom_field1}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
          </div>
          <br>      
        @endforeach
    </div>  
  <!-- ################################################################################################ -->  
    <div class="one_quarter sidebar"> 
    {!! MyFuncs::getNewsSideBar(); !!}
    </div>
      <div class="clear"></div>
    </main>
  </div>
</div> 
<!-- ################################################################################################ -->
@endsection

@section('scripts')
@parent
<!-- your custom script here -->
<script type="text/javascript" src="{{ asset('js/getsubfrommain.js') }}"></script>
@endsection