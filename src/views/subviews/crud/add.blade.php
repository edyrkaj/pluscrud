@extends('layouts.crudsv')

@section('header')
<h5>{{trans('crud.add')}} <span class="text-bold uppercase">{{trans("crud.$table_title")}}</span></h5>
@stop
@section('content')
<!--Display Add Fields-->
<form class="form-addcrud" data-url="{{URL::to(routeClass())}}" accept-charset="UTF-8" enctype="multipart/form-data">
    <!--Display Add Fields-->
    <div class="form-group">
        {{Form::Hidden('created_at', date('Y-m-d H:i:s'))}}
        {{Form::Hidden('updated_at', date('Y-m-d H:i:s'))}}

        @foreach($columns as $column)
        @if($column == 'user_id')
        {{Form::Hidden('user_id', Auth::user()->id)}}
        <?php continue; ?>
        @endif
        @if(!in_array($column,[$primary_key, 'created_at', 'updated_at', 'user_id']))
        <div class="{{$columns_class[$column]}}">
            <div class="form-group">
                <label for="{{$column}}">{{trans("crud.$column")}} {{(strpos($columns_type[$column], "relation") !== false || $columns_required[$column]) ? symbol_required($column) : ''}}</label>
                <!--&nbsp;({{$columns_type[$column]}})-->
                {{field($columns_type[$column], $column)}}
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <div class="form-group">
        <div class="col-lg-12"><hr/></div>
    </div>
    <!-- END OF FORM-->
    <div class="clearfix">&nbsp;</div>
    <div class="form-group">
        <div class="col-lg-4 pull-right">
            <div class="form-group">
                <div class="col-sm-6">
                    <button class="btn btn-success save-crud btn-block" type="submit">{{trans('app.save')}}</button>
                </div>
                <div class="col-sm-6">
                    <button type="reset" class="btn reset-crud btn-primary btn-block">{{trans('app.reset')}}</button>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="method" value="add" />
</form>
@stop
<!-- end: PAGE CONTENT-->
@section('add_js_ready')
    @if(isset($scripts))
    {{$scripts}}
    // Update HTML5 Components for Firefox and IE
    $(this).updatePolyfill();
    @endif
@stop

