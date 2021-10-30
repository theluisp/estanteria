<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Registrars producto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.min.css">
<script src="bootstrap-4.3.1/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>

    
</head>

<body>
    <h1>Producto nuevo</h1>
    
    <form method="post" action="registro_producto.php" enctype="multipart/form-data">
    <label for="nombre">Nombre del producto:</label>
		<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el nombre del producto">
<br>
		<label for="precio">Precio por unidad:</label>
		<input  class="form-control" required id="precio" name="precio" type="number" id="precio" requiered>
<br>
        <label for="categoria">
        Categoria
        </label>
        <select class="form-control" id="categoria" name="categoria">
        <?php include 'conexion/conexion.php'; ?>
        <option value="">Selecciona la categoria</option>
<?php 
    $consulta="select * from categoria;";       
$result = $conn->query($consulta); 

  while($row=$result->fetch_assoc()){ 
            echo 
        '<option id="categoria" name="categoria" value="'.$row['id_categoria'].'">'.$row['Nombre'].'</option>';
          }
            ?>
        </select>
        <br>
		<label for="precioVenta">Precio de venta:</label>
		<input class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta"><br>
		
        <label for="cantidad">Existencia:</label>
		<input  class="form-control" required id="cantidad" name="cantidad" type="number" id="cantidad" requiered>  <br>
		<label for="imagen1">Imagen del producto 1:</label><br>
        <input type="file" name="img"><br>
        <small>Formato de imagenes admitido png, jpg, gif, jpeg</small>
        <br><br>
		<label for="imagen2">Imagen del producto 2:</label><br>
        <input type="file" name="img2"><br>
        <small>Formato de imagenes admitido png, jpg, gif, jpeg</small>
        <br><br>
        
	<label for="descripcion">Descripcion del producto:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>

<br>
		 <label for="Color">Color del producto:</label>
		<input class="form-control" name="color" required type="text" id="color" placeholder="Escribe el color del producto">
		<br><br><input class="btn btn-info" type="submit" value="Agregar">        
    
    </form>

</body>
</html>