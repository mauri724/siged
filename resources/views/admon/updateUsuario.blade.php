<?php
include('../../conexion/connecion.php');
include('../../metodos/funciones.php');

$conn = connection();

$id=$_GET['id'];

$sql = "SELECT * FROM usuarios WHERE idusuarios='$id'";

$query = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($query);

$cadOpciones = "<option value=".$row['Rol_idRol'].">".nombreRol($row['Rol_idRol'])."</option>".listaTipoUsuarios();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar usuario</title>
    <link rel="stylesheet" href="../../css/styleUsuarios.css">
</head>
<body>
    <div class="users-form">
    
        <form action="../../metodos/update_user.php?id='$id'" method="POST">
            <h1>ACTUALIZAR USUARIO</h1>
            <input type="hidden" name="id" value="<?= $id ?>">        
            <input type="text" name="nombre" placeholder="NOMBRE" value="<?= $row['nombre'] ?>">
            <input type="text" name="telefono" placeholder="TELEFONO" value="<?= $row['telefono'] ?>">
            <input type="email" name="correo" placeholder="CORREO" value="<?= $row['email'] ?>">
            <select name="rol" placeholder="ROL"><?php echo $cadOpciones;?></select>
            <input type="password" name="pass" placeholder="CONTRASEÑA" value="<?= $row['contrasena'] ?>">            
            HABILITADO: <input type="checkbox" name="habilitado" value="1" <?php if($row['estado']){echo "checked";} ?>>
            <input type="submit" value="Actualizar usuario">
        </form>
    </div>
</body>
</html>

