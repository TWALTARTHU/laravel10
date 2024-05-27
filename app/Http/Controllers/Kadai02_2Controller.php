<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kadai02_2Controller extends Controller
{
        //
        public function index()
        {
            $message  = "kadai02 Blade を使ったページの表示";
            $message2 = "コントローラーからビューデータを送る";
            $message3 = "コントローラーからビュー渡された値。";

           return view('kadai02_2', compact('message', 'message2', 'message3'));

        }

}
