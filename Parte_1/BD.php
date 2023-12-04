<?php
$db_host= "localhost";
$db_nombre= "usuarios";
$db_usuario= "root";
$db_contra= "";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
    echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
    exit();
}
$consulta="SELECT * FROM datospersonales";
$resultado=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_row($resultado)){
echo $fila[0]." ";
echo $fila[1]." ";
echo $fila[2]." ";
echo $fila[3]." ";
echo "<br>";
}

mysqli_select_db($conexion,$db_nombre) or die (" NO SE ENCUENTRA LA BASE DE DATOS");

mysqli_close($conexion);

?>