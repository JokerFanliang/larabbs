<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{

    protected $guarded = ['created_at','updated_at'];

    //获取文章所有类别
    public function list($request){
        $list=ArticleType::where(function ($query) use ($request) {
                $title = trim($request->title);
                if (!empty($title)) {
                    $query->where('name',$title);
                }
            })->orderby('created_at','desc')->paginate(10);
        return $list;
    }

    //新增
    public function add($request){
    	$type=new ArticleType();
    	$type->name=$request->name;
    	$type->save();
    	return true;
    }

    //修改
    public function edit($request){
    	$type=new ArticleType();
    	$type->name=$request->name;
    	$type->save();
    	return true;
    }
}
