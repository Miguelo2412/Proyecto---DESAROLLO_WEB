<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

$mipagina=$_SERVER['PHP_SELF'];
if($mibusqueda!=NULL){
    ejecutar_consulta($mibusqueda);
} else{
    echo("<form action='".$mipagina."'method='get'>
    <label>Buscar:<input type='text' name='buscar'></label>
    <input type='submit' name='search' value='Enviar'>")
}


function ejecutar_consulta($laconsulta){
    include ('../conexion.php');
$busqueda=$_GET["search"];
$consulta="SELECT * FROM productos where producto LIKE '%$busqueda%'";
$resultado=mysqli_query($conexion,$consulta);
}
?>