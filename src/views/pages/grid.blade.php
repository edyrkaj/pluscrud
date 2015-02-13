@extends('layouts.default')
@section('add_css')
    {{ HTML::style('rapido/assets/plugins/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css')}}
    @if(isset($css))
        {{$css}}
    @endif
@stop

@section('content')
    {{$grid}}

    <!-- Include Subviews-->
    @if(!empty($subviews))
        {{dd($subviews)}}
        @foreach($subviews as $subview)
            @include($subview)
        @endforeach
    @endif
@stop


@section('add_plugins')
    {{HTML::script('assets/js/CrudTable.js')}}
    {{HTML::script('rapido/assets/plugins/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js')}}
    @if(isset($js_plugins))
        {{$js_plugins}}
    @endif
@stop

@section('add_js_ready')
    CrudTable.init();
    @if(isset($js_ready))
        {{$js_ready}}
    @endif
@stop
