<?php
class Producto{
	private $bd;

	function __construct($base){
		$this->bd = $base;
	}

	public function seleccionar_producto(){
		$respuesta = $this->bd->enviarConsulta("SELECT * FROM productos");
		return $respuesta;
	}
}
?>
