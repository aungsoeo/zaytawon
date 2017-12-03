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
        <h2>အခ်ိန္ဇယားမ်ား (Timetables)</h2>
        @foreach($subcat as $s)
          <font size="4px">{{$s->title}}</font>
          <div class="scrollable">
          <table>
            <thead>
              <tr>
                <th></th>
                <th>၁</th>
                <th>၂</th>
                <th>၃</th>
                <th>၄</th>
                <th>၅</th>
              </tr>
            </thead>
            <tbody>
              @foreach($s->post as $t)
              <tr>
                <td>{{$t->title}}</td>
                <td>{{$t->custom_field1}}</td>
                <td>{{$t->custom_field2}}</td>
                <td>{{$t->custom_field3}}</td>
                <td>{{$t->custom_field4}}</td>
                <td>{{$t->custom_field5}}</td>
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
      <!-- ################################################################################################ -->
      <!-- <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav> -->
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div> 
<!-- ################################################################################################ -->
@endsection

@section('scripts')
@parent
<!-- your custom script here -->
@endsection