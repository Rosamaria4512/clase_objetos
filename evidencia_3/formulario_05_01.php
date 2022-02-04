<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio_05.php" method="POST">
        <h3>TOTAL DE LA COMPRA </h3>
        <label for="">Numero de unidades : </label><br>
        <input type="number" name="num_unidades"><br>
        <label for="">valor de la unidad: </label><br>
        <input type="number" name="valor_unidad"><br>
        <label for="">Forma de pago: </label><br>
        <input type="text" name="forma_pago"><br>
        <label for="">a cuantos meses: </label><br>
        <input type="num" name="meses"><br>
        
        <select multiple name="meses"> 
            <option value="2">3 meses</option>    
            <option value="3">6 meses</option>  
            <option value="4">9 meses</option>    
            <option value="5">12 meses</option>
            <option value="6">12+ meses</option>  
        <input type="submit" name="btn_enviar" value="Ejecutar">
    </form>
</body>

</html>