@extends('layouts.kadai')

@section('pageTitle', 'kadai02_4')
@section('title', 'Bladeテンプレート')
@section('content')
<section>
    <h3 class="text-3xl font-bold py-5 mb-5 border-b-2 border-black">foreachによる繰り返し</h3>
        <div class="mb-5">
            @foreach ($data as $item)
            <label>id:{{ $item['id'] }}</label>
            <span class="mr-2"></span>
            <label class="ml-5">名前：{{ $item['name'] }}</label>
            <span></span>
            <h4 class="text-xl font-bold text-cyan-600 mb-2">
                {{ $item['comment'] }}
            </h4>
            @endforeach
        </div>
</section>
@endsection
