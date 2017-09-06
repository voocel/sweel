<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layui.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
            <div class="container">
                
                    <ul class="layui-nav layui-bg-green">
                        <li class="layui-nav-item"><a href="">墨绿导航</a></li>
                        <li class="layui-nav-item layui-this"><a href="">产品</a></li>
                        <li class="layui-nav-item"><a href="">大数据</a></li>
                        <li class="layui-nav-item">
                            <a href="javascript:;">解决方案</a>
                            <dl class="layui-nav-child">
                            <dd><a href="">移动模块</a></dd>
                            <dd><a href="">后台模版</a></dd>
                            <dd><a href="">电商平台</a></dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item"><a href="">社区</a></li>
                    </ul>

                

            </div>
        

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/layui.js') }}"></script>

    <script>
layui.use('element', function(){
  var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块
  
  //监听导航点击
  element.on('nav(demo)', function(elem){
    //console.log(elem)
    layer.msg(elem.text());
  });
});
</script>
</body>
</html>
