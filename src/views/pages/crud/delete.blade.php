@extends('layouts.crud')

@section('header')
<h4 class="panel-title">{{trans('crud.delete')}} <span class="text-bold">{{trans("crud.$table_title")}}</span></h4>
@stop
@section('content')
<!--Display Add Fields-->
<form class="form-editcrud" action="{{URL::to(routeClass())}}" method="POST">
    <input type="hidden" name="{{$primary_key}}" value="{{isset($rows[0]->$primary_key) ? $rows[0]->$primary_key : -1}}"/>        

    <div class="alert alert-block alert-warning fade in">
        <h4 class="alert-heading"><i class="fa fa-trash"></i> 
            Are you sure to delete row </strong> {{isset($rows[0]->$primary_key) ? $rows[0]->$primary_key : -1}} ?
        </h4>     
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="col-xs-6">
                <button class="btn btn-yellow btn-block" type="submit">
                    {{trans('app.delete')}}
                </button>
            </div>
            <div class="col-xs-6">
                <a href="{{URL::to(routeClass())}}" class="btn btn-light-grey btn-block">
                    {{trans('app.cancel')}}
                </a>
            </div>
        </div>
    </div>    

    <input type="hidden" name="method" value="delete" />
</form>
@stop
<!-- end: PAGE CONTENT-->


