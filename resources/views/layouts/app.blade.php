<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Youshuo') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/layui.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
            <div class="layui-nav">
                <div class="layui-col-md4">
                        <img style="height:60px" src="{{asset('images/logo.png')}}" alt="">
                </div>

                <div class="layui-col-md5">
                    <ul class="layui-nav layui-bg-green">
                       
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
    
                        <li class="layui-nav-item">
                            <a href="">控制台<span class="layui-badge">9</span></a>
                        </li>
                        <li class="layui-nav-item">
                            <a href="">个人中心<span class="layui-badge-dot"></span></a>
                        </li>
                        <li class="layui-nav-item">
                             <a href="javascript:;"><img src="http://t.cn/RCzsdCq" class="layui-nav-img">我</a>
                             <dl class="layui-nav-child">
                             <dd><a href="javascript:;">修改信息</a></dd>
                             <dd><a href="javascript:;">安全管理</a></dd>
                             <dd><a href="javascript:;">退了</a></dd>
                             </dl>
                        </li>
                        
                    </ul>

                    </div>

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
