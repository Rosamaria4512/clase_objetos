<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATOS DE COMPRA </h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <h3>Ingrese los siguientes datos: </h3>
    <br>
    <form action="ejercicio5.php" method = "get">
        <label>Numero de unidades: </label>
        <input type="num" name="num"><br>
        <label>Valor de la unidad: </label>
        <input type="num" name="valor"><br>
        <label>Forma de pago: </label>
        <input type="texto" name="forma_p"><br>
        
        <select multiple name="t_meses"> 
            <option value="1">0 meses</option>
            <option value="2">3 meses</option>    
            <option value="3">6 meses</option>  
            <option value="4">9 meses</option>    
            <option value="5">12 meses</option>
            <option value="6">12+ meses</option>    
        </select ><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>
</html>