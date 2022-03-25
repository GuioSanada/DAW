<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {!! Form::open(['method'=> 'PUT', 'route' => ['films.update', $film->id]]) !!}
        
        {{Form::label('filmName', 'Film Name')}}
        {{Form::text ('filmName', $film->filmName) }} <br><br>

        {{Form::label('releaseDate', 'Release Date')}}
        {{Form::text ('releaseDate', $film->releaseDate) }} <br><br>

        {{Form::label('rating', 'Rating')}}
        {{Form::text ('rating', $film->rating) }} <br><br>


        {{Form::submit('Submit')}}
    {!! Form::close() !!}
</body>
</html>