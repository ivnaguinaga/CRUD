<!DOCTYPE html>
<html>
<title>Formulario Crear</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Formulario Entrada Registros</title>
</head>

<body>
<div class="crear_persona">
    <h1>Crear Persona</h1>
    <form action="../process/insertar.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Introduce un correo">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Nombre:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce tu nombre">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="apellido">Apellido:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Introduce tu apellido">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="edad">Edad:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="edad" name="edad" placeholder="Introduce tu edad">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Guardar</button>
                <a href='../view/ver.php' class='btn btn-danger'>Cancelar</a>
            </div>
        </div>
    </form>
</body>
</html>