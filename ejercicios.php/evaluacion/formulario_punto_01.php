<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="punto_01.php" method="get">
        <h3>JUGADORES : </h3>
        <label for="">Nombre del jugador : </label><br>
        <input type="text" name="nombres"><br>
        <label for="">Digite un numero de 1-20: </label><br>
        <input type="number" name="apuesta"><br>
        <label for="">Escoja un color: </label><br>
        <select name="Color"> </option>
            <option value=>SELECCIONE</option>
            <option value="1">Rojo</option>
            <option value="2">Azul</option>    
            <option value="3">Negro</option>  

        <input type="submit" name="btn_enviar" value="Jugar">
    </form>
</body>

</html>