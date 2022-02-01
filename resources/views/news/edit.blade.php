<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EDITAR NOTICIA</title>
</head>
<body>

@if(Session::has('exito'))
    <p>{{Session::get('exito')}}</p>
@endif

@if(Session::has('error'))
    <p>{{Session::get('erro')}}</p>
@endif
        <a href="{{route('news.index')}}">Lista Noticias</a>
        <h1>Editar noticia: {{$noticia->titulo}}</h1>
        <form method="post" action="{{route('news.update',$noticia->id)}}" >
            @csrf 
            @method('put')
            <label>Titulo</label>
            <input name="titulo" type="text" value="{{$noticia->titulo}}">
            <label>Autor</label>
            <input name="autor" type="text" value="{{$noticia->autor}}">
            <label>Fecha</label>
            <input name="fecha" type="date" value="{{$noticia->fecha}}">
            <label>Noticia</label>
            <textarea name="noticia" rows="5">{{$noticia->noticia}}</textarea>

            <button type="submit">Actualizar</button>

        </form>    
</body>
</html>