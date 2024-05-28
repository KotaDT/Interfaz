<?php

include("recibir.php");

$ID=$_GET['ID'];

$sql="DELETE FROM listado WHERE ID='$ID'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: index.php");
    }
?>