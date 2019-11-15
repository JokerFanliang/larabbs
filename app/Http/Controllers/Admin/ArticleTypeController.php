<?php 

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BackController;

/**
 * 后台控制台常规控制器
 *
 * @author raoyc <raoyc2009@gmail.com>
 */
class ArticleTypeController extends BackController
{

    /**
     * 后台文章类别
     *
     * @return Response
     */
    public function index(Request $request)
    {	
        return view('admin.article_type.index');
    }

    public function add(Request $request)
    { 
        return view('admin.article_type.add');
    }

    public function edit(Request $request)
    { 
        return view('admin.article_type.edit');
    }
}
