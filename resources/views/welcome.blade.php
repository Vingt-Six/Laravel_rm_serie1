<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/exo3/12/5">exo3</a></li>
            <li><a href="/couleur/vert">exo4</a></li>
        </ul>
    </nav>

    @if (is_numeric($nbr))
        <p>{{ $nbr }} x 4 = {{ $nbr * 4 }}</p>
    @else
        <p>Error</p>
    @endif
</body>

</html>
