<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <a href="{{route('news.index')}}">Lista Noticias</a>
        <h1>Nueva noticia</h1>
        <form method="post" action="{{route('news.store')}}" >
            @csrf 
            <label>Titulo</label>
            <input name="titulo" type="text">
            <label>Autor</label>
            <input name="autor" type="text">
            <label>Fecha</label>
            <input name="fecha" type="date">
            <label>Noticia</label>
            <textarea name="noticia" rows="5"></textarea>

            <button type="submit">Guardar</button>

        </form>    
</body>
</html>