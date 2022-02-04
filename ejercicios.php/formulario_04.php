<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>IMAGEN ANIMALES </h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <h3> Usuario Digite: </h3>
    <br>
    <form action="ejercicio_04.php" method = "get">
        <label>Cantidad: </label>
        <input type="num" name="cant"><br>
        <label>Seleccione imagen a visualizar: </label><br/>

        <input type="radio" name="imagen" value="tigre"/> Tigre<br/>
        <input type="radio" name="imagen" value="leon"/> Leon<br/>
        <input type="radio" name="imagen" value="elefante"/> Elefante<br/>
        <input type="radio" name="imagen" value="pantera"/> Pantera<br/>
        <input type="radio" name="imagen" value="mariposa"/> Mariposa<br/>
        <input type="radio" name="imagen" value="conejo"/> Conejo<p>
        <input type="submit" name="btn_enviar" value="Enviar">

    </form>
</body>
</html>