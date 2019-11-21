<?php 

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BackController;
use App\Models\ArticleType;


class ArticleTypeController extends BackController
{

    protected $type;

    public function __construct(ArticleType $type)
    {
        $this->type = $type;
    }

    //列表
    public function index(Request $request)
    {	
        return view('admin.article_type.index');
    }

    //新增
    public function add(Request $request)
    { 
        return view('admin.article_type.add');
    }

    //修改
    public function edit(Request $request)
    { 
        return view('admin.article_type.edit');
    }
}
