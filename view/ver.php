<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Ejercicio CRUD PDO</title>
</head>
<body>
    <?php
        include '../services/config.php';
        include '../services/conexion.php';
        include '../process/persona.php';
        $sentencia=$pdo->prepare("SELECT * FROM alumnos");
        $sentencia->execute();        
        //print_r($listaProductos);        
    ?>
    <br><h2>Tabla De Datos</h2>
    <br/><a href='../process/formulario_insertar.php' class="btn btn-info">Crear</a><br><br>
    <table class="table table-striped table-bordered table-sm">
        <tr class="active">
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        <?php
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            foreach($listaProductos as $registro){ 

            ?>
            <tr>
                <td><?php echo "{$registro['email']}";?></td>
                <td><?php echo "{$registro['nombre']}";?></td>
                <td><?php echo "{$registro['apellido']}";?></td>
                <td><?php echo "{$registro['edad']}"?></td>
                <form method="GET" action="../process/formulario_actualizar.php">
                    <input type='hidden' name='email' value=<?php echo "'$registro[email]'";?>>
                    <td><input type='submit' value='Modificar' onclick="return confirm('¿Quieres ir a modificar?')" class="btn btn-warning"></td>
                </form>
                <form method="GET" action="../process/eliminar.php">
                    <input type='hidden' name='email' value=<?php echo "'$registro[email]'";?>>
                    <td>
                        <input type='submit' value='Eliminar' onclick="return confirm('¿Quieres ir a eliminar?')" class="btn btn-danger">
                    </td>
                </form>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
