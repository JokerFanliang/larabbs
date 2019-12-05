<?php 

namespace App\Http\Controllers\Index;
use Illuminate\Http\Request;
use App\Models\ArticleType;
use App\Models\Article;
use Elasticsearch\ClientBuilder;
use App\Http\Controllers\Index\BaseController;


class IndexController extends BaseController
{


    public function index(Request $request)
    {
    	$articles=Article::get();


        return view('index.index.index');
    }

    public function detail(Request $request)
    {	
        return view('index.index.detail');
    }
}
