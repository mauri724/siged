<?php
include('../../conexion/connecion.php');
include('../../metodos/funciones.php');

$conn = connection();

$cadOpciones = listaTipoUsuarios();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAS DE USUARIOS</title>
    <link rel="stylesheet" href="../../css/styleUsuarios.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>
    <div class="icon">
        <i class="bi bi-arrow-left-circle-fill"></i>
    </div>
    <div class="users-form">
        <form action="../../metodos/insert_user.php" method="POST">
            <h1>CREAR USUARIO</h1>
            <input type="text" name="nombre" placeholder="NOMBRE">
            <input type="text" name="telefono" placeholder="TELEFONO">
            <input type="email" name="email" placeholder="CORREO">
            <select name="rol" placeholder="TIPO DE USUARIO"><?php echo $cadOpciones;?></select>
            <input type="password" name="contrasena" placeholder="CONTRASEÑA">
            
            <input type="submit" value="Agregar usuario">
        </form>
    </div>
    <div class="users-table">
        <h2>USUARIO RESGISTRADOS</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>TELEFONO</th>
                    <th>EMAIL</th>
                    <th>TIPO DE USUARIO</th>
                    <th></th>                    
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)):
                    if(mysqli_num_rows($query)>0){?>
                <tr>
                    <th><?= $row['idusuarios'] ?></th>
                    <th><?= $row['nombre'] ?></th>
                    <th><?= $row['telefono'] ?></th>
                    <th><?= $row['email'] ?></th>
                    <th><?= nombreRol($row['Rol_idRol']); ?></th>
                    
                    <th><a href="./updateUsuario.php?id=<?= $row['idusuarios'] ?>" class="user-table--edit">Editar</a> </th>
                    <th><a href="../../metodos/delete_user.php?id=<?= $row['idusuarios'] ?>" class="user-table--delete">Eliminar</a> </th>
                </tr>
                <?php } endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>