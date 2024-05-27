<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sample02_1Controller extends Controller
{
    //
    public function index()
    {
        //return view('sample02_1');

        // 変数$tmpを追加
        // $tmp = "コントローラから渡した値です。";
        // // viewヘルパの第2引数に値を渡す。
        // return view('sample02_1', ['data' => $tmp]);

         // 変数$tmpを追加 今回は使わないのでコメントアウト
        // $tmp = "コントローラから渡した値です。";

        // 変数 $data1,$data2,$data3 を新規追加
        $data = "コントローラから渡した値です。";
        $data2 = "コントローラから渡した２つめの値です。";
        $data3 = "コントローラから渡した３つ目の値です。";



        return view('sample02_1', compact('data', 'data2', 'data3'));

    }

}
