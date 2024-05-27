<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Sample04Request;
class Sample04Controller extends Controller
{
    //
    public function index()
    {
        return view('sample04_1');
    }
    public function post(Sample04Request $request)
    {
        // CSRFトークンの破棄
        $request->session()->regenerateToken();

        // $request->validate(
        //     [
        //         'name'  => ['required'],
        //         'email' => [
        //             'required', 'email'
        //         ],
        //     ]
        // );


	 //リクエストデータを変数に格納
        $result['name'] = $request->input('name');
        $result['email'] = $request->input('email');

// 入力値を渡して、sample04_2確認画面へ
        return view('sample04_2', compact('result'));
    }

}
