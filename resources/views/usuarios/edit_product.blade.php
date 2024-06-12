<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('user.edit')}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input name="name" type="string" value="{{old('Name',$producto->name) }}">
        <br>
        </label>
        <br>
        <label>
        Price:
        <br>
        <input name="price" type="integer" value="{{old('price',$producto->price)}}">
        <br>
        </label>
        <br>
        <label>   
         Description:
         <br>
        <input name="description" type="text" value="{{old('description',$producto->description)}}">
        <br>
        </label>
        <br>
        <label>
        Cant:
        <br>
        <input name="cant" type="integer" value="{{old('cant',$producto->cant)}}">
        <br>
        </label>
        <br>
        <label>
         Date:
            <br>
            <input name="date" type="date" value="{{old('date',$producto->date)}}">
            <br>
            </label>
            <br>
       
        <button  type="submit">Actualizar Curso</button>

    </form>
   
</body>
</html>