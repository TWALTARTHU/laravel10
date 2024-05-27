<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sample02_2Controller extends Controller
{
    //
    public function index()
    {
        $num = 10;// 偶数を設定

        return view('sample02_2', ['num' => $num]);
    }

}
