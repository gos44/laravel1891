
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>FORMULARIO PRODUCTO</h1>
    
        <form action="{{route('product.store')}}"  method="POST" >
           
            @csrf
    
            <label>
                Ingrese el nombre del producto:
                <br>
                <input type="text" name="name">
            </label>
            <br><br>
            <label>
                Ingrese el precio: :
                <br>
                <input type="number" name="price">
            </label>
            <br><br>
            <label>
                Ingrese el descricion: :
                <br>
                <input type="text" name="description">
            </label>
            <br><br>
            <label>
                Ingrese el cantidad: :
                <br>  <br>
                <input type="number" name="cant">
            </label>
            <br>  <br>
            <label>
                Ingrese el fecha:
                <br>
                <input type="date" name="date">
            </label>
           
            <br><br><br>
    
            <button type="submit">Enviar Formulario:</button>
           
       
        </form>
    
    </body>
    </html>

