<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="16_procesoSanyo.php" method="POST">
        <label for="">Nombres: </label><br>
        <input type="text" name="nombres"><br>
        <label for="">Marca del electrodomestico: </label><br>
        <input type="text" name="marca"><br>
        <label for="">Valor unitario: </label><br>
        <input type="number" name="valor_uni"><br>
        <label for="">Numero de articulos: </label><br>
        <input type="number" name="numero_art"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">
    </form>
</body>

</html>