<?php
require_once("PLANTILLA/PLANTILLAFORMULARIO.PHP");
?>
<div class="formulario">
<form action="" method="" >
    <div class="mb-3">
        <label>Nombres completos</label>
        <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
        <label>contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="minimo 8 caracteres"aria-describedby="emailHelp">
        <label>confirmar contraseña</label>
        <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
        <label>Correo electronico</label>
        <input type="email" class="form-control" name="email"placeholder="email" aria-describedby="emailHelp">
        
    </div>
    
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>

<footer>
  <center>Copyright 2022 Version.1.1</center>

</footer>
</div>
