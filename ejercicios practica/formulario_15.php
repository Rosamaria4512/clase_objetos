<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>IMAGEN DE FRUTAS </h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <h3>Aprecidado usuario Digite: </h3>
    <br>
    <form action="ejercicio_15.php" method = "get">
        <label>Cantidad: </label>
        <input type="num" name="cant"><br>
        <label>Seleccione imagen a visualizar: </label><br/>

        <input type="radio" name="imagen" value="naranja"/> naranja<br/>
        <input type="radio" name="imagen" value="uvas"/> uvas<br/>
        <input type="radio" name="imagen" value="sandia"/> sandia<br/>
        <input type="radio" name="imagen" value="manzana"/> manzana<br/>
        <input type="submit" name="btn_enviar" value="Enviar">

    </form>
</body>
</html>