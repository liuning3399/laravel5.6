<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" Content="PHP,Linux,Laravel,HTML,MySQL,MongoDB,Redis,centos,梦想,博客">
    <meta name="description" content="追梦 梦想 博客">
    <meta name="author" content="<441380237@qq.com>">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','title') - {{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @yield('css')
</head>
<!-- <script src="{{ asset('js/myloveru/jquery-3.2.1.min.js')}}" data-instant-track></script>
<script src="{{ asset('js/myloveru/jquery.fancybox.min.js')}}?ver=3.2.5" data-instant-track></script>
<script src="{{ asset('js/myloveru/load.js')}}?v=5.4.5"></script>
<script src="{{ asset('js/myloveru/prism.js')}}?v=5.4.5"></script>
<script src="{{ asset('js/myloveru/yiyan.js')}}?v=5.4.5"></script>
<script src="{{ asset('js/myloveru/sm.js')}}?v=5.4.5"  data-instant-track></script>
<script src="{{ asset('js/myloveru/ajax.js')}}?v=5.4.5"></script>
<script src="{{ asset('js/myloveru/instantclick.min.js')}}?v=3.1.0" data-instant-track></script> 
<script src="http://myloveru.cn/usr/themes/Yodu/js/jquery-3.2.1.min.js" data-instant-track></script>
<script src="http://myloveru.cn/usr/themes/Yodu/js/jquery.fancybox.min.js?ver=3.2.5" data-instant-track></script>
<script src="http://myloveru.cn/usr/themes/Yodu/load.js?v=5.4.5"></script>
<script src="http://myloveru.cn/usr/themes/Yodu/js/prism.js?v=5.4.5"></script>
<script src="http://myloveru.cn/usr/themes/Yodu/js/yiyan.js?v=5.4.5"></script>
<script src="http://myloveru.cn/usr/themes/Yodu/js/sm.js?v=5.4.5"  data-instant-track></script>
<script src="http://myloveru.cn/usr/themes/Yodu/ajax.js?v=5.4.5"></script>
<script src="http://myloveru.cn/usr/themes/Yodu/js/instantclick.min.js?v=3.1.0" data-instant-track></script>
<script data-no-instant>
 function show_date_time(){
    window.setTimeout("show_date_time()",1e3);
    var BirthDay=new Date("2018/11/3 19:00:00"),today=new Date,timeold=today.getTime()-BirthDay.getTime(),msPerDay=864e5,e_daysold=timeold/msPerDay,daysold=Math.floor(e_daysold),e_hrsold=24*(e_daysold-daysold),hrsold=Math.floor(e_hrsold),e_minsold=60*(e_hrsold-hrsold),minsold=Math.floor(60*(e_hrsold-hrsold)),seconds=Math.floor(60*(e_minsold-minsold));span_dt_dt.innerHTML=daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒";}
    show_date_time();
</script>
<script data-no-instant>
    InstantClick.on('change', function(isInitialLoad) {
     if (isInitialLoad === false) {
        if (typeof MathJax !== 'undefined'){MathJax.Hub.Queue(["Typeset",MathJax.Hub]);}
        if (typeof prettyPrint !== 'undefined'){prettyPrint();}
        if (typeof _hmt !== 'undefined'){_hmt.push(['_trackPageview', location.pathname + location.search]);}  
        if (typeof ga !== 'undefined'){ga('send', 'pageview', location.pathname + location.search);}  
    var audio = new Audio("{{ asset('js/video/ls.mp3')}}");audio.volume = 0.2;audio.play();  }
    });
    InstantClick.init('mousedown');
</script>
-->
<body>
    <div id="app" class="{{ route_class() }}-page">
        @include('layouts._header')
        <header class="bs-docs-nav navbar navbar-static-top" id="top"></header>

        <main class="py-4">
            
            @include('common._error')
            @include('common._message')

            @yield('content')

        </main>
        <div style="position:fixed; right:50px; bottom:80px;"><a href="#top" class="btn btn-outline-info">返回顶部</a></div>
        @include('layouts._footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('script')

    @include('layouts._baidutongji')
</body>

</html>