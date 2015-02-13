<div class="noteWrap col-md-2 panel-purple">
    @yield('header')
</div>
<div class="noteWrap col-md-10">
    @yield('content')
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        //Dynamic JS
        @yield('add_js_ready')
    });
</script>