<!DOCTYPE html>
<html lang="es-ES">
 
<head>
	<meta charset="utf-8">
	<title>Conversor de distancias</title>
	<meta name="description" content="Conversor de distancias">
</head>
 
<body>
	<section align="center">
 
		<h4 style="text-align:center;">Unidades</h4>
		<p align="center">
			1 Kilometro = 1000 metros<br>
			1 Metro = 1 metro<br>
		</p>
		<form method="POST" action="#">
			<div align="center">
				<input type="text" name="valor" value="<?php if(!empty($_POST['valor'])){ echo $_POST['valor'];} ?>" />
				<select name="tipo">
					<option value="<?php if(!empty($_POST['tipo'])){ echo $_POST['tipo'];} ?>">
						<?php if(!empty($_POST['tipo'])){ echo $_POST['tipo'];} else { echo 'Seleccione';} ?>
					</option>
					<option value="Metro">Metro</option>
					<option value="Kilometro">Kilometro</option>

				</select>
				<input type="submit" name="calculo" value="Convertir">
			</div>
		</form>
 
 
		<h4 align="center">Cálculo en PHP</h4>
		<p align="center">
 
			<?php
 
if (isset($_POST['calculo'])) {
	$valor = $_POST['valor'];
	$tipo = $_POST['tipo'];
 
	switch ($tipo) {
 
		case 'Pulgada':
 
			echo '
			Pulgadas: '.$valor.'<br>
			Pies: '.$valor * (0.0254 / 0.3048) .'<br>
			Yardas: '.$valor * (0.0254 / 1609.344) .'<br>
			Millas Marinas: '.$valor * (0.0254 / 1852) .'<br>
			Kilometros: '.$valor * (0.0254 / 1000) .'<br>
			Metros: '.$valor * 0.0254 .'<br>
			Milimetros: '.$valor * (0.0254 / 0.001) .'<br>
			';
			break;
 
		case 'Pie':
 
			echo '
			Pulgadas: '.$valor * (0.3048 / 0.0254) .'<br>
			Pies: '.$valor * (0.3048 / 0.3048) .'<br>
			Yardas: '.$valor * (0.3048 / 0.9144) .'<br>
			Millas: '.$valor * (0.3048 / 1609.344) .'<br>
			Millas Marinas: '.$valor * (0.3048 / 1852) .'<br>
			Kilometros: '.$valor * (0.3048 / 1000) .'<br>
			Metros: '.$valor * 0.3048 .'<br>
			Milimetros: '.$valor * (0.3048 / 0.001) .'<br>
			';
			break;
 
		case 'Yarda':
 
			echo '
			Pulgadas: '.$valor * (0.9144 / 0.0254).'<br>
			Pies: '.$valor * (0.9144 / 0.3048) .'<br>
			Yardas: '.$valor.'<br>
			Millas: '.$valor * (0.9144 / 1609.344) .'<br>
			Millas Marinas: '.$valor * (0.9144 / 1852) .'<br>
			Kilometros: '.$valor * (0.9144 / 1000) .'<br>
			Metros: '.$valor * 0.9144 .'<br>
			Milimetros: '.$valor * (0.9144 / 0.001) .'<br>
			';
			break;
 
		case 'Milla':
 
			echo '
			Pulgadas: '.$valor * (1609.344 / 0.0254) .'<br>
			Pies: '.$valor * (1609.344 / 0.3048) .'<br>
			Yardas: '.$valor * (1609.344 / 0.9144) .'<br>
			Millas: '.$valor.'<br>
			Millas Marinas: '.$valor * (1609.344 / 1852) .'<br>
			Kilometros: '.$valor * (1609.344 / 1000) .'<br>
			Metros: '.$valor * 1609.344 .'<br>
			Milimetros: '.$valor * (1609.344 / 0.001) .'<br>
			';
			break;
 
		case 'Milla_Marina':
 
			echo '
			Pulgadas: '.$valor * (1852 / 0.0254) .'<br>
			Pies: '.$valor * (1852 / 0.3048) .'<br>
			Yardas: '.$valor * (1852 / 0.9144) .'<br>
			Millas: '.$valor * (1852 / 1609.344) .'<br>
			Millas Marinas: '.$valor.'<br>
			Kilometros: '.$valor * (1852 / 1000) .'<br>
			Metros: '.$valor * 1852 .'<br>
			Milimetros: '.$valor * (1852 / 0.001) .'<br>
			';
			break;
 
		case 'Kilometro':
 
			echo '
			Pulgadas: '.$valor * (1000 / 0.0254) .'<br>
			Pies: '.$valor * (1000 / 0.3048) .'<br>
			Yardas: '.$valor * (1000 / 0.9144) .'<br>
			Millas: '.$valor * (1000 / 1609.344) .'<br>
			Millas Marinas: '.$valor * (1000 / 1852) .'<br>
			Kilometros: '.$valor.'<br>
			Metros: '.$valor * 1000 .'<br>
			Milimetros: '.$valor * (1000 / 0.001).'<br>
			';
			break;
 
		case 'Metro':
 
			echo '
			Pulgadas: '.$valor / 0.0254 .'<br>
			Pies: '.$valor / 0.3048 .'<br>
			Yardas: '.$valor / 0.9144 .'<br>
			Millas: '.$valor / 1609.344 .'<br>
			Millas Marinas: '.$valor / 1852 .'<br>
			Kilometros: '.$valor / 1000 .'<br>
			Metros: '.$valor.'<br>
			Milimetros: '.$valor / 0.001.'<br>
			';
			break;
 
		case 'Milimetro':
 
			echo '
			Pulgadas: '.$valor * (0.001 / 0.0254) .'<br>
			Pies: '.$valor * (0.001 / 0.3048) .'<br>
			Yardas: '.$valor * (0.001 / 0.9144) .'<br>
			Millas: '.$valor * (0.001 / 1609.344) .'<br>
			Millas Marinas: '.$valor * (0.001 / 1852) .'<br>
			Kilometros: '.$valor * (0.001 / 1000).'<br>
			Metros: '.$valor * 0.001.'<br>
			Milimetros: '.$valor.'<br>
			';
			break;
 
	default:
 
		echo 'No hay unidades a convertir';
 
		break;
	}
 
} else {
	echo 'No hay valores a convertir';
}
?>
		</p>
	</section>
</body>
 
</html>