<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ArticleType;
//use Laravel\Scout\Searchable;

class Article extends Model
{
	//use Searchable;
    protected $guarded = ['created_at','updated_at'];

    public function type()
    {
        //关联的模型类名, 关系字段
        return $this->hasOne('App\Models\ArticleType','id','type_id');
    }

    public function searchableAs(){
    	return "articles";
    }

    public function toSearchableArray(){
    	return [
    		'title'=>$this->title,
    		'user_id'=> $this->user_id,
    		'content'=>$this->content,
    	];
    }

}
