@extends('admin.layout._back')
@section('content')
<section class="Hui-article-box">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 文章管理
	<span class="c-gray en">&gt;</span>
	文章类别
	<span class="c-gray en">&gt;</span>
	类别新增
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="Hui-article">
<article class="page-container">
	<form action="/admin/article_type/save" class="form form-horizontal" id="form-article-add" method="post">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>类别：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="name" required>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
				<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>
				<a class="btn btn-default radius" type="button" href="/admin/article_type/index">&nbsp;&nbsp;返回&nbsp;&nbsp;</a>
			</div>
		</div>
	</form>
</article>
</div>
</section>
@endsection