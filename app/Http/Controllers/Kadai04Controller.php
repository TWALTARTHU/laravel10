<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\kadai04Request;
class Kadai04Controller extends Controller
{
        //
        public function index()
        {
            return view('kadai04_1');
        }

        public function post(kadai04Request $request)
        {
            // CSRFトークンの破棄
            $request->session()->regenerateToken();

         //リクエストデータを変数に格納
            $result['type'] = $request->input('type');
            $result['name'] = $request->input('name');
            $result['email'] = $request->input('email');
            $result['note'] = $request->input('note');
            $result['title'] = $request->input('title');

    // 入力値を渡して、kadai04_2確認画面へ
            return view('kadai04_2', compact('result'));
        }


}
