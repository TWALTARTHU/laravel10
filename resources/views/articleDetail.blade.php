@extends('layouts.kadai')

@section('pageTitle', 'articleDetail')
@section('title', '記事詳細')
@section('content')

<section>
    <div class="bg-white hover:bg-white p-5 mb-10 rounded-md shadow-md">
        <h3 class="text-2xl font-bold leading-10 my-5 px-5 py-2 border-b">（※ここにタイトルが入る）</h3>
        <p class="text-gray-400 text-sm text-right px-3"><time datetime="/kadai03/registration">（※ここに日付が入る）</time></p>
        <div class="flex justify-between py-3">

            <figure class="flex flex-col w-4/12">
                <!—TODO:画像 -->
                <img src="/kadai03/registration" class="w-full mb-5">
            </figure>

            <p class="grow w-8/12 text-lg leading-loose px-3 py-5">（※ここに本文が入る）</p>
        </div>
    </div>
    <div class="flex justify-end">
        <a href="/kadai03"
            class="block w-16 text-white text-center bg-gray-500 hover:bg-gray-400 mr-5 px-3 py-2 rounded-md">戻る</a>

        <form action="/kadai03/detail" method="get">

            <button type="submit"
                class="block w-16 text-white text-center bg-red-600 hover:bg-red-500 mr-5 px-3 py-2 rounded-md">削除</button>
        </form>

        <a href="/kadai03/editing"
            class="block w-20 text-white text-center bg-pink-600 hover:bg-pink-500 px-3 py-2 rounded-md">編集</a>
    </div>
</section>

@endsection

