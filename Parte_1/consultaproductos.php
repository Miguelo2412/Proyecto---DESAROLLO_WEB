<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>seccion</th>
            <th>producto</th>
            <th>origen</th>
            <th>importado</th>
            <th>precio</th>
        </tr>
    <?php
    require ('conexion.php');

    $consulta="SELECT * FROM productos";
    $resultado=mysqli_query($conexion,$consulta);


    while ($fila = mysqli_fetch_row($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila[0] . "</td>";
        echo "<td>" . $fila[1] . "</td>";
        echo "<td>" . $fila[2] . "</td>";
        echo "<td>" . $fila[3] . "</td>";
        echo "<td>" . $fila[4] . "</td>";
        echo "<td>" . $fila[5] . "</td>";
        echo "</tr>";
    }

    mysqli_close($conexion);
    ?>
</body>
</html>
