@extends('layouts.kadai')

@section('pageTitle', 'kadai02_3')
@section('title', 'Bladeテンプレート')
@section('content')
    <section>
        <h3 class="text-3xl font-bold py-5 mb-5 border-b-2 border-black">ifにより</h3>
        <section class="p-5">
            @if ($comment)
            <h4 class="text-xl font-bold text-pink-600 mb-2">
               {{$comment}}
            </h4>
            @else
            <h4 class="text-xl font-bold text-pink-600 mb-2">
                変数には値はありません
            </h4>
            @endif
        </section>
@endsection
