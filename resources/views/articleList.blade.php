@extends('layouts.kadai')

@section('pageTitle', 'articleList')
@section('title', '記事一覧')
@section('content')

<div class="flex justify-end mb-10">
    <a href="/kadai03/registration"
            class="block w-24 text-white text-center bg-red-600 hover:bg-sky-500 px-3 py-2 rounded-md">新規投稿</a>
</div>
<section class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-10">

    @foreach ($list_data as $data)

    <!-- ▼▼記事1件分の表示▼▼ -->
    <article
        class="row-span-2 bg-white hover:bg-white rounded-md shadow-md hover:shadow-lg transition-shadow overflow-hidden">
        <a href="/kadai03/detail" class="block w-full h-full">
            <figure class="h-48 overflow-hidden">
                <!—TODO:画像 -->
                <img src="" class="w-full h-full object-cover object-top">
            </figure>
            <h3 class="font-bold mt-5 mb-2 px-2">{{ $data->title }}</h3>
            <p class="text-gray-400 text-xs mb-5 px-2"><time datetime="">{{ $data->created_at }}</time></p>
        </a>
    </article>
    <!-- ▲▲記事1件分の表示▲▲ -->
    @endforeach


</section>
{{ $list_data->links() }}


@endsection
