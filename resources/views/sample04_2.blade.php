@extends('layouts.kadai')

@section('pageTitle', 'Sample04')
@section('title', 'サンプル4結果表示')
@section('content')
<div class="flex justify-between flex-col lg:flex-row items-stretch mb-5">
    <div class="flex flex-col w-full lg:w-6/12 mr-5">
        <!-- ▼▼氏名▼▼ -->
        <div class="flex flex-col w-full mb-5">
            <label class="text-gray-400 text-sm">氏名</label>
            <p name="name" class="w-full h-10 px-3 text-lg border-2 border-gray-200 rounded-md outline-none">{{ $result['name'] }}</p>
        </div>
        <!-- ▲▲氏名▲▲ -->
        <!-- ▼▼メールアドレス▼▼ -->
        <div class="flex flex-col w-full mb-5">
            <label class="text-gray-400 text-sm">メールアドレス</label>
            <p name="email" value=""
                class="w-full h-10 px-3 text-lg border-2 border-gray-200 rounded-md outline-none">{{ $result['email'] }}</p>
        </div>
        <!-- ▲▲メールアドレス▲▲ -->
    </div>
</div>
<div class="flex justify-end">
    <a href="sample04"
        class="text-white text-center leading-10 bg-red-500 px-10 mr-10 hover:bg-gray-400 rounded-md">戻る</a>
    <button type="button"
        class="text-white text-center leading-10 bg-red-600 px-10 hover:bg-pink-500 rounded-md">送信</button>
</div>

@endsection
