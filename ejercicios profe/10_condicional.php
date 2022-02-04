<?php
$vr_dato = "B";
# shift + alft + F
if ($vr_dato == "A" or $vr_dato == "B" or $vr_dato == "C") {

    if ($vr_dato == "A" or $vr_dato == "a") {
        echo "Pago con Tarjeta de Credito";
    }
    if ($vr_dato == "B" or $vr_dato == "b") {
        echo "Pago con Bono o Cupon";
    }
}else{
    echo "Digite una Letra valida ". $vr_dato;
}
