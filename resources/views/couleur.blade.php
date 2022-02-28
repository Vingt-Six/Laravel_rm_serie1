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
            <li><a href="/5">exo2</a></li>
            <li><a href="/exo3/12/5">exo3</a></li>
        </ul>
    </nav>

    <ul>
        @if ($couleur == 'bleu')
            <li style="font-weight: bold">Bleu</li>
        @else
            <li>Bleu</li>
        @endif
        @if ($couleur == 'vert')
            <li style="font-weight: bold">Vert</li>
        @else
            <li>Vert</li>
        @endif
        @if ($couleur == 'rouge')
            <li style="font-weight: bold">Rouge</li>
        @else
            <li>Rouge</li>
        @endif
        @if ($couleur == 'jaune')
            <li style="font-weight: bold">Jaune</li>
        @else
            <li>Jaune</li>
        @endif
    </ul>
</body>
</html>