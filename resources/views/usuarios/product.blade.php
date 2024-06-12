
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>FORMULARIO user</h1>
    
        <form action="{{route('user.store')}}"  method="POST" >
           
            @csrf
            <label>
                Ingrese el nombre del nombre:
                <br>
                <input type="text" name="name">
            </label>
            <br><br>
            <label>
                Ingrese el numero de telefono:
                <br>
                <input type="number" name="tfno">
            </label>
            <br><br>
            <label>
                Ingrese el codigo:
                <br>
                <input type="number" name="codigo">
            </label>
            <br><br>
            <label>
                Ingrese el direccion:
                <br>  <br>
                <input type="text" name="direcion">
            </label>
            <br>  <br>
    
            <button type="submit">Enviar Formulario:</button>
           
       
        </form>
    
    </body>
    </html>

