<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kadai02_3Controller extends Controller
{
    //
    public function index()
    {
        $comment = "課題2-3コントローラーで格納した値です。";

       return view('kadai02_3',['comment'=>$comment]);

    }


}
