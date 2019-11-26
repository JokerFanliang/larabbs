<?php 

namespace App\Http\Controllers\Index;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LogRegController extends Controller
{


    public function login(Request $request)
    {	
        return view('index.logreg.login');
    }

    public function reg(Request $request)
    {
        return view('index.logreg.reg');
    }

}
