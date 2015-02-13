@extends('layouts.crud')

@section('header')
<h4 class="panel-title">{{trans('crud.read')}} <span class="text-bold">{{trans("crud.$table_title")}}</span></h4>
{{panel_tools(
    panel_tool(
        array(
            'class' => 'btn btn-xs btn-link btn-transparent-grey tooltips',
            'href' => $menu->back["url"],
            'data-original-title' => $menu->back["title"],
            'data-placement' => 'right'
        ), 'fa-arrow-circle-left')
)
}}
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
                <input name="{{$column}}" id="{{$column}}" value="{{isset($rows[0]->$column) ? $rows[0]->$column : ''}}" class="form-control" disabled="disabled" readonly="readonly" />
            </div>    
        </div>
        @endforeach
    </div>
</form>
@stop
<!-- end: PAGE CONTENT-->
