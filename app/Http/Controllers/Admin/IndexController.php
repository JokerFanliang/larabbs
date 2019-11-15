<?php 

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BackController;

/**
 * 后台控制台常规控制器
 *
 * @author raoyc <raoyc2009@gmail.com>
 */
class IndexController extends BackController
{

    /**
     * 后台首页
     *
     * @return Response
     */
    public function index(Request $request)
    {
    	$data=$request->all();	
        return view('admin.index.index',compact('data'));
    }
}
