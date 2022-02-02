<!-- Script de PHP para guardar en canciones.txt-->
<?php

$tit = $_POST['titulo'];
$des = $_POST['descripcion'];

$cancion ="
Canción:  $tit
Descripcion de su letra:  $des
";

$archivo = fopen("canciones.txt", "a+");
fwrite($archivo, $cancion);

?>




<!-- Script de PHP para leer el archivo canciones.txt-->
<section class="section">
	<p class="subtitle"> Lectura de archivo creado de canciones </p>

	<?php

	$lecturaArchivoCanciones = fopen("canciones.txt", "r");

	while (!feof($lecturaArchivoCanciones)) {
		$linea = fgets($lecturaArchivoCanciones);
		echo nl2br($linea);
	}
	fclose($lecturaArchivoCanciones);


	?>

</section>


