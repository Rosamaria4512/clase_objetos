<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Puntaje</h1>
    <h2>FORMULARIO DE CAPTURA </h2>

    <p>Ingrese:</p>

    <form action="ejercicio_15.php" method = "get">
        <label>Nombre: </label>
        <input type="text" name="nombre"><p>
        <label>Cuantas veces quedo en Primer lugar: </label>
        <input type="num" name="primero"><p>
        <label>Cuantas veces quedo en Segundo lugar: </label>
        <input type="num" name="segundo"><p>
        <label>Cuantas veces quedo en Tercer lugar: </label>
        <input type="num" name="tercero"><p>

        <input type="submit" name="btn_enviar" value="Enviar">

    </form>
</body>
</html>