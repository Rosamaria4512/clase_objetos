<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> BIENVENIDOS! </h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <h3>Ingrese siguientes datos: </h3>
    <br>
    <form action="ejer1.php" method = "get">
        
        <label>Nombre: </label><br>
        <input type="text" name="nombre"><br>
        <label>Digite numero entre 1 - 20: </label><br>
        <input type="num" name="numero"><br>
        <label>Escoja color: </label><br>
        <select name="color"> <br>
            <option value="1">Rojo</option>
            <option value="2">Negro</option>    
            <option value="3">Azul</option>
        </select ><br><p>
        
        <input type="submit" name="btn_enviar" value="Jugar!">
       

    </form>
    
</body>