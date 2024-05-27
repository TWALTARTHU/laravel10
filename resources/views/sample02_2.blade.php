<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample02_1</title>
</head>
<body>

    @if ($num % 2)
        <h3>奇数です</h3>
    @else
        <h3>偶数です</h3>
    @endif

    @for ($i = 0; $i < 10; $i++)
        <p>変数iの値： {{ $i }}</p>
    @endfor


    {{-- パターン１（$usersが配列） --}}
    @php
    $users=array("TWAL","TAR","THU");
    @endphp


    @foreach ($users as $user)
        <p>{{ $user }}</p>
    @endforeach

    @while ($num > 0)
    <p>numの値：{{ $num }}</p>
    @php
        $num--;
    @endphp
@endwhile


</body>
</html>
