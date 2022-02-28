<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (is_numeric($a. $b))
        <p>{{$a. ' + '. $b}} = {{$a + $b}}</p>
        <p>{{$a. ' - '. $b}} = {{$a - $b}}</p>
    @else
        <p>Error</p>
    @endif
</body>
</html>