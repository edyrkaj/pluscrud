@extends('layouts.crud')
@section('header')
    <h4 class="panel-title">{{trans('crud.add')}} <span class="text-bold">{{trans("crud.$table_title")}}</span></h4>
    {{panel_tools(
        panel_tool(
        array(
        'class' => 'btn btn-xs btn-link btn-transparent-grey tooltips',
        'href' => $menu->back["url"],
        'data-original-title' => $menu->back["title"],
        'data-placement' => 'right'
        ), 'fa-arrow-circle-left'
    ))}}
@stop
@section('content')
    <!--Display Add Fields-->
    <form class="form-addcrud" action="{{URL::to(routeClass())}}" method="POST" enctype="multipart/form-data">
        <!--Display Add Fields-->
        <div class="row">
            {{Form::Hidden('created_at', date('Y-m-d H:i:s'))}}
            {{Form::Hidden('updated_at', date('Y-m-d H:i:s'))}}

            @foreach($columns as $column)
                @if($column == 'user_id')
                    {{Form::Hidden('user_id', Auth::user()->id)}}
                    <?php continue; ?>
                @endif
                @if(!in_array($column,array($primary_key, 'created_at', 'updated_at', 'user_id')))
                    <div class="{{$columns_class[$column]}}">
                        <div class="form-group">
                            <label for="{{$column}}">{{trans("crud.$column")}} {{(strpos($columns_type[$column], "relation") !== FALSE || $columns_required[$column]) ? symbol_required($column) : ''}}</label>
                            <!--&nbsp;({{$columns_type[$column]}})-->
                            {{field($columns_type[$column], $column)}}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="form-group">
            <div class="col-lg-12">
                <hr/>
            </div>
        </div>
        <!-- END OF FORM-->
        <div class="clearfix">&nbsp;</div>
        <div class="form-group">
            <div class="col-lg-4 pull-right">
                <div class="form-group">
                    <div class="col-sm-6">
                        <button class="btn btn-success btn-block" type="submit">
                            {{trans('app.save')}}
                        </button>
                    </div>
                    <div class="col-sm-6">
                        <button type="reset" class="btn btn-primary btn-block">
                            {{trans('app.reset')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="method" value="add"/>
    </form>
    @stop
    <!-- end: PAGE CONTENT-->