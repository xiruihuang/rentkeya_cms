@extends('admin.layout._back')

@section('content-header')
@parent
          <h1>
            控制面板
            <small>概述</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ site_url('dashboard', 'admin') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li class="active">控制面板 - 概述</li>
          </ol>
@stop

@section('content')

@stop
