<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (is_numeric($nbr))
        <p>{{ $nbr }} x 4 = {{ $nbr * 4 }}</p>
    @else
        <p>Error</p>
    @endif
</body>

</html>
