@extends('layouts.crud')
@section('header')
<h4 class="panel-title">{{trans('crud.show')}} <span class="text-bold">{{trans("crud.$table_title")}}</span></h4>
@if(isset($title_actions))
{{panel_tools(crud_title_actions($title_actions))}}
@else
{{panel_tools()}}
@endif
@stop
@section('content')
<!--Display Add Fields-->
<div class="table-responsive">
    @if(Session::has('message'))
    <?php $status=(Session::get('message')->status == 'danger') ?  'error': Session::get('message')->status; ?>
    <div class="alert alert-{{Session::get('message')->status}}">
        <button data-dismiss="alert" class="close">×</button>
        <strong class="uppercase">{{$status}}!</strong>
        @if(is_object(Session::get('message')->data))
        <br/>
        @foreach (Session::get('message')->data->all() as $message)
        {{$message}} <br/>
        @endforeach
        @endif
    </div>
    @endif
    @if(isset($columns))
    <table class="table table-striped table-hover" width="100%" id="crud_table">
        <thead>
            <tr>
                @foreach($columns as $column)
                <th>{{trans("crud.$column")}}</th>
                @endforeach
                @if(isset($actions))
                <th>{{trans("crud.actions")}}</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
                @if(isset($row->deleted_at))
                    <tr class="danger">
                @else
                    <tr>
                @endif
                @foreach($columns as $column)
                <td>{{show_field($column, $columns_type[$column], $row->$column)}}</td>
                @endforeach
                @if(isset($actions))
                <td>
                    @foreach($actions as $key => $action)
                        @if($key == 'delete' && isset($row->deleted_at))

                        @elseif($key == 'restore' && !isset($row->deleted_at))

                        @else
                            {{crud_action($action, $primary_key, $row->$primary_key)}}
                        @endif
                    @endforeach
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
<!--MANAGE SUBVIEWS-->
<div id="simplecrud" class="no-display"></div>
<!--END SUBVIEWS-->
@stop
<!-- end: PAGE CONTENT-->