<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>基于 layui 的极简社区页面模版</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="keywords" content="fly,layui,前端社区">
  <meta name="description" content="Fly社区是模块化前端UI框架Layui的官网社区，致力于为web开发提供强劲动力">
  <link rel="stylesheet" href="{{ asset('index/layui/css/layui.css') }}">
  <link rel="stylesheet" href="{{ asset('index/css/global.css') }}">
</head>
<body>

@include('index.layout.head')

@include('index.layout.mid')

@yield('content')

@include('index.layout.foot')
 
<script src="{{ asset('index/layui/layui.js') }}"></script>
<script>
layui.cache.page = '';
layui.cache.user = {
  username: '游客'
  ,uid: -1
  ,avatar: '{{ asset('index/images/avatar/00.jpg') }}'
  ,experience: 83
  ,sex: '男'
};
layui.config({
  version: "3.0.0"
  ,base: '{{ asset('index/mods/') }}' //这里实际使用时，建议改成绝对路径
}).extend({
  fly: 'index'
}).use('fly');
</script>

</body>
</html>