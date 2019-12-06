<?php 

namespace App\Http\Controllers\Index;
use Illuminate\Http\Request;
use App\Models\ArticleType;
use App\Models\Article;
use Laravel\Scout\Searchable;
use App\Http\Controllers\Index\BaseController;


class IndexController extends BaseController
{


    public function index(Request $request)
    {
    	$articles=Article::get();

    	//dump(Article::search("测试")->get());exit;
        return view('index.index.index');
    }

    public function detail(Request $request)
    {	
        return view('index.index.detail');
    }
}
