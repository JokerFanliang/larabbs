@extends('admin.layout._back')
@section('content')
<section class="Hui-article-box">
	<nav class="breadcrumb">
		<i class="Hui-iconfont"></i> 
		<a href="/" class="maincolor">首页</a> 
		<span class="c-999 en">&gt;</span>
		<span class="c-666">我的桌面</span> 
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
			<i class="Hui-iconfont">&#xe68f;</i>
		</a>
	</nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<p class="f-20 text-success">欢迎!</p>

		</article>
	</div>
</section>
@endsection