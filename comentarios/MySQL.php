<?php
class MySQL
{
	const SERVIDOR = 'localhost';
	const USUARIO = 'construi_adsiar';
	const CLAVE = 'Daniel-ADSIAR';
	const BASE = 'test';
	private $_conexion;

	public function conectar()
	{
		$this->_conexion = mysql_connect( self::SERVIDOR, self::USUARIO, self::CLAVE ) or die("No se pudo conectar con el servidor");
		mysql_select_db( self::BASE, $this->_conexion );
		mysql_set_charset("utf8");
	}

	public function desconectar()
	{
		mysql_close($this->_conexion);
	}

	public function traerDatos($sql)
	{
	   	//echo $sql;

	   	$this->conectar();
	   	$resultado = mysql_query($sql, $this->_conexion);

	   	$todo = array();
	   	while ($fila = mysql_fetch_assoc($resultado)){
			$todo[] = $fila;
		}

		$this->desconectar();

		return $todo;
	}

    public function ejecutarSQL($sql)
    {
 	   	//echo $sql;
	   	$this->conectar();
        mysql_query($sql, $this->_conexion);
        $this->desconectar();
    }

} // fin de la clase MySQL