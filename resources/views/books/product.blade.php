
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>FORMULARIO Libros</h1>
    
        <form action="{{route('libro.store')}}"  method="POST" >
           
            @csrf

            <label>
                Ingrese el nombre del title:
                <br>
                <input type="text" name="title">
            </label>
            <br><br>
            <label>
                Ingrese el codigo :
                <br>
                <input type="text" name="codigo">
            </label>
            <br><br>
            <label>
                Ingrese el isbn: :
                <br>
                <input type="text" name="isbn">
            </label>
            <br><br>
            <label>
                Ingrese el editorial: :
                <br>  <br>
                <input type="text" name="editorial">
            </label>
            <br>  <br>
            <label>
                Ingrese el paginas:
                <br>
                <input type="number" name="paginas">
            </label>
           
            <br><br><br>
    
            <button type="submit">Enviar Formulario:</button>
           
       
        </form>
    
    </body>
    </html>

