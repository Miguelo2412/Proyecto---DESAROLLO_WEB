<?php
$cod_producto = $_POST['c_prod'];
$seccion = $_POST['seccion'];
$nombreP = $_POST['nom_producto'];
$paisP = $_POST['pais'];
$importado = $_POST['importado'];
$precio = $_POST['precio'];

require('conexion.php');
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(mysqli_connect_errno()){
    echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
    exit();
}
mysqli_select_db($conexion,$db_nombre) or die (" NO SE ENCUENTRA LA BASE DE DATOS");
$consulta="INSERT INTO productos (id_producto, seccion, producto, origen, importado, precio) VALUES ('$cod_producto', '$seccion', '$nombreP', '$paisP', '$importado', $precio);";
$resultado=mysqli_query($conexion,$consulta);
if ($resultado == FALSE){
    echo "NO SE PUEDE INSERTAR EN LA BASE DE DATOS";
}else {
    echo "LOS DATOS INSERTADOS FUERON" ."<br>";
    echo "CODIGO PRODUCTO: ". $cod_producto."<br>";
    echo "SESSION PRODUCTO: ". $seccion."<br>";
    echo "NOMBRE PRODUCTO: ". $nombreP."<br>";
    echo "PAIS DE ORIGEN: ". $paisP."<br>";
    echo "ES IMPORTADO: ". $importado."<br>";
    echo "PRECIO DEL PRODUCTO: ". $precio;
}
?>