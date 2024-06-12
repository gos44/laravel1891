<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Libro</title>
</head>
<body>
    <h1>Detalles del Libro</h1>
    <ul>
        <li>ID: {{ $libro->id }}</li>
        <li>Título: {{ $libro->title }}</li>
        <li>Código: {{ $libro->codigo }}</li>
        <li>ISBN: {{ $libro->isbn }}</li>
        <li>Editorial: {{ $libro->editorial }}</li>
        <li>Páginas: {{ $libro->paginas }}</li>
    </ul>
</body>
</html>
