<?php 
    if(isset($_REQUEST["btn_enviar"]));
        $vrnumero = $_POST["nombres"];
        $vrimagen = $_POST["operacion"];

        if ($vrimagen=="Lapiz") {
            $archivoimg = "/img/lapiz.jpj";
            //echo "la imagen es: "."<img src='$archivoimg'>";
            $elemento = "Lapiz";
        }

        $i=1;
        do {
            echo "<img src='$archivoimg'>";
            $i++;
        } while ($i <= $vrnumero);
        echo"<hr>";

?>

