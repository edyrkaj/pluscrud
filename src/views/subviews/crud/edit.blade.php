@extends('layouts.crudsv')

@section('header')
<h4>{{trans('crud.edit')}} <span class="text-bold uppercase">{{trans("crud.$table_title")}}</span></h4>
@stop
@section('content')
<!--Display Add Fields-->
<form class="form-editcrud" data-url="{{URL::to(routeClass())}}" method="POST"  enctype="multipart/form-data">
    <input type="hidden" name="{{$primary_key}}" value="{{isset($rows[0]->$primary_key) ? $rows[0]->$primary_key : -1}}"/>        
    <!--Display Add Fields-->
    <div class="form-group">
        {{Form::Hidden('updated_at', date('Y-m-d H:i:s'))}}
        
        @foreach($columns as $column)
        @if($column == 'user_id')
         {{Form::Hidden('user_id', Auth::user()->id)}}
         <?php continue; ?>
        @endif
        @if(!in_array($column,array($primary_key, 'created_at', 'updated_at', 'user_id')))
        <div class="{{$columns_class[$column]}}">
            <div class="form-group">
               <label for="{{$column}}">{{trans("crud.$column")}} {{(strpos($columns_type[$column], "relation") !== false || $columns_required[$column]) ? symbol_required($column) : ''}}</label>
                {{field($columns_type[$column], $column, isset($rows[0]->$column) ? $rows[0]->$column : null)}}
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
                    <button class="btn btn-success save-crud btn-block" type="submit">
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
    <input type="hidden" name="method" value="edit" />
</form>
@stop
<!-- end: PAGE CONTENT-->
@section('add_js_ready')
    // Update HTML5 Components for Firefox and IE
    $(this).updatePolyfill();
    @if(isset($scripts))
{{$scripts}}
@endif
@stop

