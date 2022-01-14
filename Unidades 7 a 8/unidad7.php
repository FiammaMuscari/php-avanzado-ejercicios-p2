<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
</head>

<body>

	<div class="container">
		<header>
			<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>


			<nav>
		<?php include("botonera.php"); 
		include ("recursos.php");
		?>
	</nav>
	</header>
	<section style="margin-bottom:3em;">
		<h2>Compras</h2>
		<table>
			<tr>
				<th>Codigo</th>
				<th>Producto</th>
				<th>Descripcion</th>
				<th>Precio</th>
				<th>Carrito</th>
			</tr>
			<?php
			$listar_productos = $producto->seleccionar_producto();
			for ($i=0; $i < count($listar_productos); $i++) {
			?>
			<tr>
				<td style="border-bottom: 1px solid #ddd;padding:2rem 0px 1rem 0px;"><?php echo $listar_productos[$i]['codigo'];?></td>
				<td style="border-bottom: 1px solid #ddd;"><?php echo $listar_productos[$i]['producto'];?></td>
				<td style="border-bottom: 1px solid #ddd;"><?php echo $listar_productos[$i]['descripcion'];?></td>
				<td style="border-bottom: 1px solid #ddd;">$<?php echo $listar_productos[$i]['precio'];?></td><!--include cargarcarrito -->
				<td style="border-bottom: 1px solid #ddd;"><a href="cargarcarrito.php?cod=<?php echo $listar_productos[$i]['codigo'];?>&&pro=<?php echo $listar_productos[$i]['producto'];?>&&des=<?php echo $listar_productos[$i]['descripcion'];?>&&pre=<?php echo $listar_productos[$i]['precio'];?>"style=background-color:#f06156;border:0;border-radius:5px;cursor:pointer;color:#fff;font-size:16px;font-weight:bold;line-height:1.4;padding:10px;width:180px;>Comprar</a></td>
			</tr>
		<?php } ?>
		</table >	
		<?php
			$listar_productos = $producto->seleccionar_producto();
			for ($i=0; $i < count($listar_productos); $i++) {
		?>  
  <?php }?>

	</section>
	<aside  style=display:grid;justify-items:center;>
	<?php
	$listar_compra = $carrito->seleccionar_compra();
	if (empty ($listar_compra)){
		echo "<h2>Agregar Productos</h2>
		<img src='imagenes/carrito.png'>";
		}else{ ?>
	<table class="tablita">
		<tr>
			<th>Producto</th>
			<th>Precio</th>
			<th> </th>
		</tr>
		<tr>
	<?php
	for ($i=0; $i < count($listar_compra); $i++) { ?>	
			<td><?php echo $listar_compra[$i]['producto']?></td>
			<td>$<?php echo $listar_compra[$i]['precio']?></td><!--include eliminar -->
			<td><a href="eliminar.php?codigo=<?php echo $listar_compra[$i]['codigo']?>"style=background-color:#f06156;border:0;border-radius:5px;cursor:pointer;color:#fff;font-size:16px;font-weight:bold;line-height:1.4;padding:7px;width:180px;>Eliminar</a></td>
		</tr>
	<?php } } ?>
	</table>
</div>
</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>