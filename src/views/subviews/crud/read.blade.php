@extends('layouts.crudsv')

@section('header')
<h4>{{trans('crud.read')}} <span class="text-bold uppercase">{{trans("crud.$table_title")}}</span></h4>
@stop
@section('content')
<!--Display Add Fields-->
<form class="form-readcrud">
    <!--Display Add Fields-->
    <div class="form-group">
        @foreach($columns as $column)
        <div class="{{$columns_class[$column]}}">
            <div class="form-group">
                <label for="{{$column}}">{{trans("crud.$column")}}</label>
                {{field($columns_type[$column], $column, isset($rows[0]->$column) ? $rows[0]->$column : null, array('disabled' => 'disabled'))}}
            </div>    
        </div>
        @endforeach
    </div>
</form>
@stop
<!-- end: PAGE CONTENT-->
