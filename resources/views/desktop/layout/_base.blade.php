<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Rentkeya员工管理</title>

    <meta name="description" content="@section('description') {{ isset($description) ? $description : 'Rentkeya员工管理日志!' }} @show{{-- meta描述 --}}" />
    <meta name="keywords" content="管理系统,{{ cache('website_keywords') }}" />
    <meta name="author" content="{{ cache('system_author_website', 'rentkeya.com') }}" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ _asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ _asset('assets/css/icomoon_style.css') }}" />
    <link rel="stylesheet" href="{{ _asset('assets/css/markdown_style.css') }}" />





    @section('htmlHead')
    @show{{-- head区域 --}}
</head>
<body class="paper">


<div id="con_wrapper">
    <div id="r_con">
        <div class="header">
            <a href="/"><h1>Rentkeya员工管理</h1></a>
            <div><a href="//localhost:8000/admin/auth/login" class="btn btn-primary margin-bottom">登陆</a></div>
        </div>
        
        @section('mainContent')
        @show{{-- 主体内容 --}}

        <div class="footer">
            <a href="/"><h1>请尽快完成所有tasks</h1></a>
        </div>

    </div>
</div>

@section('afterFooter')

@show{{-- 页脚区域 --}}
</body>
</html>
