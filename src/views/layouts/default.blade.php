<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]>
<html class="ie8" lang="{{Session::get('lang')}}">
<![endif]-->
<!--[if IE 9]>
<html class="ie9" lang="{{Session::get('lang')}}">
<![endif]-->
<!--[if !IE]>
<html lang="{{Session::get('lang')}}">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title>
        @section('title') Plus @if(isset($page_title)) | {{$page_title}} @endif @show
    </title>

    <!-- start: META -->
    <meta charset="utf-8"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- end: META --><!-- start: MAIN CSS -->
    {{ HTML::style('rapido/assets/plugins/Raleway/raleway.css?family=Raleway:400,300,500,600,700,200,100,800')}}
    {{ HTML::style('rapido/assets/plugins/bootstrap/css/bootstrap.min.css')}}
    {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.min.css')}}
    {{ HTML::style('rapido/assets/plugins/iCheck/skins/all.css')}}
    {{ HTML::style('rapido/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css')}}
    {{ HTML::style('rapido/assets/plugins/animate.css/animate.min.css')}}
    <!-- end: MAIN CSS -->
    {{ HTML::style('rapido/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}
    {{ HTML::style('rapido/assets/plugins/owl-carousel/owl-carousel/owl.theme.css')}}
    {{ HTML::style('rapido/assets/plugins/owl-carousel/owl-carousel/owl.transitions.css')}}
    {{ HTML::style('rapido/assets/plugins/summernote/dist/summernote.css')}}
    {{ HTML::style('rapido/assets/plugins/toastr/toastr.min.css')}}
    {{ HTML::style('rapido/assets/plugins/bootstrap-datepicker/css/datepicker.css')}}
    {{ HTML::style('rapido/assets/plugins/bootstrap-select/bootstrap-select.min.css')}}
    {{ HTML::style('rapido/assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}
    {{ HTML::style('rapido/assets/plugins/DataTables/media/css/DT_bootstrap.css')}}
    {{ HTML::style('rapido/assets/plugins/DataTables/media/css/jquery.dataTables.grouping.css')}}
    {{ HTML::style('rapido/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')}}
    {{ HTML::style('rapido/assets/plugins/select2/select2.css')}}
    {{ HTML::style('rapido/assets/plugins/weather-icons/css/weather-icons.min.css')}}
    {{ HTML::style('rapido/assets/plugins/nvd3/nv.d3.min.css')}}
    {{ HTML::style('rapido/assets/css/styles.css')}}
    {{ HTML::style('rapido/assets/css/styles-responsive.css')}}
    {{ HTML::style('rapido/assets/css/plugins.css')}}
    {{ HTML::style('rapido/assets/css/themes/theme-style3.css', ['id' => 'skin_color'])}}
    {{ HTML::style('rapido/assets/css/print.css', ['media' => 'print'])}}
    {{ HTML::style('assets/css/style.css')}}

    {{ HTML::style('assets/plugins/js-webshim/minified/shims/styles/shim-ext.css')}}
    {{ HTML::style('assets/plugins/js-webshim/minified/shims/styles/forms-picker.css')}}
    {{ HTML::script('assets/plugins/js-webshim/minified/polyfiller.js')}}

    @section('add_css')
    <!--To Add Custom Css Plugins-->
    @show
    <!-- start: MAIN JAVASCRIPTS -->

    @if(app::getLocale() == 'al')
        {{ HTML::script('assets/js/lang/al.js')}}
    @else
        {{ HTML::script('assets/js/lang/en.js')}}
    @endif

    <script>
        // load the forms polyfiller
        webshim.polyfill('forms forms-ext');
    </script>

    <!--end:Main Javascripts-->

    @section('head_script')
    @show

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}"/>
</head>
<!-- end: HEAD --><!-- start: BODY -->
<body>
<!-- start: SLIDING BAR (SB) -->
@include('includes.sliding')
<!-- end: SLIDING BAR -->
<div class="main-wrapper">
    <!-- start: TOPBAR -->
    @include('includes.topbar')
    <!-- end: TOPBAR --><!-- start: PAGESLIDE LEFT -->
    @include('includes.pageslideleft')
    <!-- end: PAGESLIDE LEFT --><!-- start: PAGESLIDE RIGHT -->
    @include('includes.pageslideright')
    <!-- end: PAGESLIDE RIGHT --><!-- start: MAIN CONTAINER -->
    <div class="main-container inner">
        <!-- start: PAGE -->
        <div class="main-content">
            <!-- /.modal --><!-- end: PANEL CONFIGURATION MODAL FORM -->
            <div class="container">
                <!-- end: BREADCRUMB --><!-- start: PAGE CONTENT -->
                @yield('content')
                <!-- end: PAGE CONTENT-->
            </div>
            <div class="subviews">
                <div class="subviews-container"></div>
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER --><!-- start: FOOTER -->
    @include('includes.footer')
    <!-- end: FOOTER -->
</div>
<!--[if lt IE 9]>{{ HTML::script('rapido/assets/plugins/respond.min.js')}}{{ HTML::script('rapido/assets/plugins/excanvas.min.js')}}{{ HTML::script('rapido/assets/plugins/jQuery/jquery-1.11.1.min.js')}}<![endif]--><!--[if gte IE 9]><!-->
{{ HTML::script('rapido/assets/plugins/jQuery/jquery-2.1.1.min.js')}}
<!--<![endif]-->
{{ HTML::script('rapido/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}
{{ HTML::script('rapido/assets/plugins/bootstrap/js/bootstrap.min.js')}}
{{ HTML::script('rapido/assets/plugins/blockUI/jquery.blockUI.js')}}
{{ HTML::script('rapido/assets/plugins/iCheck/jquery.icheck.min.js')}}
{{ HTML::script('rapido/assets/plugins/moment/min/moment.min.js')}}
{{ HTML::script('rapido/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js')}}
{{ HTML::script('rapido/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js')}}
{{ HTML::script('rapido/assets/plugins/bootbox/bootbox.min.js')}}
{{ HTML::script('rapido/assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js')}}
{{ HTML::script('rapido/assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js')}}
{{ HTML::script('rapido/assets/plugins/jquery.appear/jquery.appear.js')}}
{{ HTML::script('rapido/assets/plugins/jquery-cookie/jquery.cookie.js')}}
{{ HTML::script('rapido/assets/plugins/velocity/jquery.velocity.min.js')}}
{{ HTML::script('rapido/assets/plugins/TouchSwipe/jquery.touchSwipe.min.js')}}
<!-- end: MAIN JAVASCRIPTS --><!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
{{ HTML::script('rapido/assets/plugins/jquery-mockjax/jquery.mockjax.js')}}
{{ HTML::script('rapido/assets/plugins/toastr/toastr.js')}}
{{ HTML::script('rapido/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}
{{ HTML::script('rapido/assets/plugins/bootstrap-modal/js/bootstrap-modal.js')}}
{{ HTML::script('rapido/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js')}}
{{ HTML::script('rapido/assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js')}}
{{ HTML::script('rapido/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}
{{ HTML::script('rapido/assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}
@if(App::getLocale() == 'al')
    {{ HTML::script('rapido/assets/plugins/jquery-validation/localization/messages_al.js')}}
@endif
{{ HTML::script('rapido/assets/plugins/jquery-validation/dist/additional-methods.min.js')}}
{{ HTML::script('rapido/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js')}}
{{ HTML::script('rapido/assets/plugins/DataTables/media/js/jquery.dataTables.min.js')}}
{{ HTML::script('rapido/assets/plugins/DataTables/media/js/jquery.dataTables.grouping.js')}}
{{ HTML::script('rapido/assets/plugins/truncate/jquery.truncate.js')}}
<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS --><!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
{{ HTML::script('rapido/assets/plugins/select2/select2.min.js')}}
{{ HTML::script('rapido/assets/js/table-data.js')}}
{{ HTML::script('rapido/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js')}}
{{ HTML::script('rapido/assets/js/subview.js')}}
{{ HTML::script('rapido/assets/plugins/holder/holder.js')}}
{{ HTML::script('rapido/assets/plugins/ckeditor/ckeditor.js')}}
{{ HTML::script('rapido/assets/plugins/ckeditor/adapters/jquery.js')}}
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --><!-- start: CORE JAVASCRIPTS  -->
{{ HTML::script('rapido/assets/js/main.js')}}


@section('add_plugins')
<!--To Add Custom JS Plugins-->
@show<!-- end: CORE JAVASCRIPTS  -->

<script type="text/javascript">
    jQuery.fn.CKEditorValFor = function (element_id) {
        return CKEDITOR.instances[element_id].getData();
    };
    (function () {
        Main.init();
        TableData.init();
        // Dynamic JS
        @yield('add_js_ready')
        $('.selectpicker').selectpicker();
        // Client Side Remove Filters
        $(document).on('click', '.remove-filter', function () {
            var count_li = $(this).closest('ol').find('li').length;
            if (Number(count_li) == 2) { // filter lang
                $(this).closest('ol').remove();
            } else {
                $(this).closest('li').remove();
            }
        });
    })();
</script>

<!--To Add Custom JS-->
@yield('add_js')
</body>
<!-- end: BODY -->
</html>
