<?php
include ("recibir.php");
$conexion;

$Codigo = $_POST['codigo'];
$Producto = $_POST['producto'];
$Descripcion = $_POST['descripcion'];
$Stock = $_POST['stock'];
$nombreimg = $_FILES['imagen']['name'];
$archivo = $_FILES['imagen']['tmp_name'];
$ruta = "Imagen";
$ruta = $ruta . "/" . $nombreimg;

move_uploaded_file($archivo, $ruta);

$sql = "INSERT INTO Listado (Imagen, Codigo, Producto, Descripcion, Stock) 
VALUES ('$ruta', '$Codigo', '$Producto', '$Descripcion','$Stock')";
$query=mysqli_query($conexion,$sql);


if($query){
        Header("Location: index.php");
}else{
        
}?>