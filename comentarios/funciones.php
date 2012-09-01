<?php
require_once 'MySQL.php';

$bd = new MySQL();

// guardar el comentario con la fecha actual si ha sido enviado el formulario,
// escapar los caracteres para  evitar inyección sql
if ( isset($_POST['nickname'], $_POST['comentario']) ) {

	$nickname = mysql_real_escape_string($_POST['nickname']);
	$comentario = mysql_real_escape_string($_POST['comentario']);
	$sql = "INSERT INTO comentarios (fecha, nickname, comentario) VALUES (NOW(),
		'" . $nickname . "',
		'" . $comentario . "')";

	$bd->ejecutarSQL($sql);

}

$consulta = "SELECT fecha, nickname, comentario FROM comentarios ORDER BY fecha DESC";
$datos = $bd->traerDatos($consulta);