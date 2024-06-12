<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asociar Usuario con Ejemplar</title>
</head>
<body>
    <h1>Asociar Usuario con Ejemplar</h1>

    <form action="{{ route('usuarios.asociar-rol') }}" method="POST">
        @csrf
        <label>
            Usuario:
            <select name="user_id">
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->id }}-{{ $usuario->name }}</option>
                @endforeach
            </select>
        </label>
        <br><br><br>
        <label>
            Ejemplar:
            <select name="exemplares_id">
                @foreach($exemplares as $exemplare)
                    <option value="{{ $exemplare->id }}">{{ $exemplare->id }}-{{ $exemplare->localizacion }}</option>
                @endforeach
            </select>
        </label>
        <br><br>
        <button type="submit">Enviar Formulario</button>
    </form>
</body>
</html>
