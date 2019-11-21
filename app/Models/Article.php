<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ArticleType;

class Article extends Model
{

    protected $guarded = ['created_at','updated_at'];

    public function type()
    {
        //关联的模型类名, 关系字段
        return $this->hasOne('App\Models\ArticleType','id','type_id');
    }

}
