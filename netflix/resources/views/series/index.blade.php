<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Series</h1>
    @foreach( $series as $serie)
        <p>{{$serie->serieName}} <a href=" {{ URL::route('series.show', $serie->id)}}">Show</a></p>
    @endforeach
</body>
</html>