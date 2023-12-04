<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar productos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="titulo">Gestion de Productos</h1>
        <div class="content">
            <form action="insertar_productos.php" method="post" class="form-reg">
                <div>
                    <h1 class="titulo_form">Agregar Producto</h1>
                </div>
                <div class="form_row">
                    <label> Codigo de Producto</label>
                    <input type="text" name="c_prod" id="c_prod" >
                </div>
                <div class="form_row">
                    <label> Seccion</label>
                    <input type="text" name="seccion" id="seccion">
                </div>
                <div class="form_row">
                    <label> Nombre Producto</label>
                    <input type="text" name="nom_producto" >
                </div>
                <div class="form_row">
                    <label> Pais Origen</label>
                    <input type="text" name="pais" >
                </div>
                <div class="form_row">
                    <label> El Producto es importado</label>
                    <select name="importado" id="importado">
                        <option> VERDADERO</option>
                        <option> FALSO</option>
                    </select>
                </div>
                <div class="form_row">
                    <label> Precio</label>
                    <input type="num" name="precio">
                </div>
                <div class="form_row">
                    <input type="submit">
                </div>
                <div class="form_row">
                    <input type="reset">
                </div>
            </form>
        </div>
</body>
</html>