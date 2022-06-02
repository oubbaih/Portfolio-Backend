<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (isset($ff) > 0)
    @foreach ($ff->test as $item => $value)
    {{$value}} <em>/</em>
    @endforeach
    @endif


    <form action="{{route('home.store')}}" method="post">
        @csrf
        <input type="text" name="test">
        <button type="submit">submit</button>
    </form>

</body>

</html>
 