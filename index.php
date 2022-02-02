<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leer archivo txt con PHP</title>

	<!--Cargar los estilos -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>


	<section class="hero is-primary">
		<div class="hero-body">
			<p class="title">Contenido del archivo de texto plano</p>
		</div>
	</section>



	<!-- Script de PHP para crear el archivo.txt-->
	<section class="section is-medium columns">
		
		<div class="column">
			<?php

				$lecturaArchivo = fopen("archivo.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}
				fclose($lecturaArchivo);


			?>
		</div>




		<!-- Script de PHP para leer con otra ruta-->
	</section>
	<section class="section">
		<p class="subtitle"> Lectura de segundo archivo con ruta en carpeta</p>

		<?php

			$lecturaArchivo2 = fopen("C:\Users\MI PC\Desktop\otroArchivo.txt", "r");

			while (!feof($lecturaArchivo2)) {
				$linea = fgets($lecturaArchivo2);
				echo nl2br($linea);
			}
			fclose($lecturaArchivo2);


		?>
		
	</section>





	<!-- Script de PHP para crear el archivo notas.txt-->
	<section>
		<?php 

			$crearArchivo = fopen("notas.txt", "w");
			fwrite($crearArchivo, "Esta es la primer linea de mi archivo de texto");
			fputs($crearArchivo, "<br> Esta es mi segunda línea");
			fclose($crearArchivo);

		?>
	</section>
	





	<!-- Script de PHP para leer el archivo notas.txt-->
	<section class="section">
		<p class="subtitle"> Lectura de archivo creado</p>

		<?php

			$lecturaArchivo3 = fopen("notas.txt", "r");

			while (!feof($lecturaArchivo3)) {
				$linea = fgets($lecturaArchivo3);
				echo nl2br($linea);
			}
			fclose($lecturaArchivo3);


		?>
		
	</section>








	<!-- Script de PHP para crear el archivo notas.txt-->
	<section>
		<?php 

			$crearArchivo = fopen("notas2.txt", "a+");
			fwrite($crearArchivo, "<br><br>Esta es la primer linea de mi archivo de texto");
			fputs($crearArchivo, "<br> Esta es mi segunda línea");
			fclose($crearArchivo);

		?>
	</section>
	





	<!-- Script de PHP para leer el archivo notas.txt-->
	<section class="section">
		<p class="subtitle"> Lectura de archivo creado</p>

		<?php

			$lecturaArchivo3 = fopen("notas2.txt", "r");

			while (!feof($lecturaArchivo3)) {
				$linea = fgets($lecturaArchivo3);
				echo nl2br($linea);
			}
			fclose($lecturaArchivo3);


		?>
		
	</section>






	<section class="section">
		
		<form action="guardar.php" method="post">
			<div>
				<label>Título: </label>
				<input type="text" class="input" name="titulo" placeholder="Escribe el título">
			</div>

			<div>
				<br>
				<label>Descripción:</label>
				<textarea name="descripcion" class="input" placeholder="Agregue la descripción">
					
				</textarea>
			</div>
			<br>
			<input type="submit" class="button is-link" value="Guardar">
		</form>

	</section>




</body>
</html>