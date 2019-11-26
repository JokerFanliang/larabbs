<?php 

namespace App\Http\Controllers\Index;
use Illuminate\Http\Request;
use App\Http\Controllers\Index\BaseController;


class IndexController extends BaseController
{


    public function index(Request $request)
    {	
        return view('index.index.index');
    }


}
