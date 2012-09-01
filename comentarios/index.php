<?php
require_once 'funciones.php';
?><!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Comentarios - #phpadas</title>
		<link rel="stylesheet" href="../css/comentarios.css">
	</head>
	<body>
		<h1>Sistema simple de comentarios #phpadas</h1>
		<section id="comentarios">
			<?php foreach ($datos as $fila) { ?>
				<article class="comentario">
				<span class="persona"><?php echo $fila['nickname']; ?> dijo: </span>
				<span class="opinion"><?php echo $fila['comentario']; ?></span>
				<span class="fecha"><?php echo $fila['fecha']; ?></span>
				</article>
			<?php } // fin del foreach ?>
		</section>
		<section id="comentar">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="formulario" name="formulario">
				<input type="text" name="nickname" placeholder="Nickname" required maxlength="60" />
				<textarea name="comentario" placeholder="Escribe aquí tu comentario de 140 caracteres" required maxlength="140"></textarea>
				<input type="submit" value="Enviar comentario" />
        	</form>
        </section>
        <footer>
        	<p>Powered by @danielromeroauk</p>
        </footer>
	</body>
</html>