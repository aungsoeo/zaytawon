@extends('admin.layout')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

<div id="content" class="bodylayout"><!-- second common-->
    <div class="well">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Timetable Edit</h1>
            </div>  
        </div>
        <div class="row">
            <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.timetable.update',$timetable->id) }}">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Day</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" name="title" value="{{ $timetable->title }}">

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('main_category_id') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Main Category</label>

                    <div class="col-md-9">
                        <select id="ctr_parent_id" class="form-control" name="main_category_id">
                            <option value="{{$timetable->Category->id}}">{{$timetable->Category->title}}</option>
                            @foreach($cat as $c)
                                @if($timetable->Category->id!=$c->id)
                                    <option value="{{ $c->id }}">{{ $c->title }}</option>
                                @endif
                            @endforeach
                        </select>
                        @if ($errors->has('main_category_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('main_category_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
 
                <div class="form-group{{ $errors->has('sub_category_id') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Sub Category</label>

                    <div class="col-md-9">
                        <select id="ctr_sub_id" class="form-control" name="sub_category_id">
                            <option value="{{$timetable->SubCategory->id}}">{{$timetable->SubCategory->title}}</option>
                            @foreach($subcat as $sc)
                                @if($sc->parent_id==$timetable->main_category_id && $timetable->SubCategory->id!=$sc->id))
                                    <option value="{{ $sc->id }}">{{ $sc->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

               
                <div class="form-group{{ $errors->has('custom_field1') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Cutstom Field1</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="custom_field1" value="{{ $timetable->custom_field1 }}">
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('custom_field2') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Cutstom Field2</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="custom_field2" value="{{ $timetable->custom_field2 }}">
                    </div>
                </div>            

                <div class="form-group{{ $errors->has('custom_field3') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Cutstom Field3</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="custom_field3" value="{{ $timetable->custom_field3 }}">
                    </div>
                </div>
                            
                <div class="form-group{{ $errors->has('custom_field4') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Cutstom Field4</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="custom_field4" value="{{ $timetable->custom_field4 }}">
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('custom_field5') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Cutstom Field5</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="custom_field5" value="{{ $timetable->custom_field5 }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-6">
                        <br>
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
    <input type="hidden" id="ctr_tocken" value="{{ csrf_token() }}" /> 
</div>

@endsection

@section('scripts')
@parent

<script type="text/javascript" src="{{ asset('js/getsubfrommain.js') }}"></script>

@endsection