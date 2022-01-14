<?php
class Carrito{
	private $bd;

	function __construct($base){
		$this->bd = $base;
	}
//agregar
	public function insertar_compra($codigo, $producto, $descripcion, $precio){
		$respuesta = $this->bd->enviarConsulta("INSERT INTO compras VALUES ($codigo, '$producto', '$descripcion', $precio)");
		return $respuesta;
	}
//seleccion
	public function seleccionar_compra(){
		$respuesta = $this->bd->enviarConsulta("SELECT * FROM compras");
		return $respuesta;
	}
//eliminar
	public function eliminar_compra($codigo){
		$respuesta = $this->bd->enviarConsulta("DELETE FROM compras WHERE codigo = $codigo");
		return $respuesta;
	}

}
?>
