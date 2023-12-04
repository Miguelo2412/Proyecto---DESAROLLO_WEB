<?php

include (../conexion.php);
$busqueda=$_GET["search"];
$consulta="SELECT * FROM productos where producto LIKE '%$busqueda%'";
$resultado=mysqli_query($conexion,$consulta);

?>