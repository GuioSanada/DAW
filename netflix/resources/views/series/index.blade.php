<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


    <title>Document</title>
</head>
<body>
    <h1>Series</h1>
    <div>Añadir nuevo registro<a href="{{ URL::route('series.create')}}"><i class="ri-file-add-line"></i></a></div>
    @foreach( $series as $serie)
            {!! Form::open(['method' => 'DELETE', 'route' =>['series.destroy', $serie->id], 'id' => 'formul']) !!}
                <p>
                {{$serie->serieName}} <a href=" {{ URL::route('series.show', $serie->id)}}"><i class="ri-open-source-line"></i></a>
                <a href=" {{ URL::route('series.edit', $serie->id)}}"><i class="ri-edit-line"></i></a>

                <a href="#" onclick="document.getElementById('formul').submit()"><i class="ri-delete-bin-line"></i></a>
                
                </p>
            {!! Form::close() !!}
    @endforeach
</body>
</html>