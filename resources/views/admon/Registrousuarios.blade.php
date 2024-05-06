@extends('layouts.baseadmon')

@section('content')

<head>
    <link rel="stylesheet" href="../../css/styleUsuarios.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">    
</head>
<body>
    <div class="icon">
        <i class="bi bi-arrow-left-circle-fill"></i>
    </div>
    

<title>LISTAS DE USUARIOS</title>
    <div class="users-form">
        <form action="../../metodos/insert_user.php" method="POST">
            <h1>CREAR USUARIO</h1>
            <input type="text" name="nombre" placeholder="NOMBRE">
            <input type="text" name="telefono" placeholder="TELEFONO">
            <input type="email" name="email" placeholder="CORREO">
            <select name="rol" placeholder="TIPO DE USUARIO"><?php //echo $cadOpciones;?></select>
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
                @foreach ($Usuarios as $Usuario)
                <tr>
                    <td class="fw-bold">{{$Usuario->idusuarios}}</td>
                    <td>{{$Usuario->nombre}}</td>
                    <td>{{$Usuario->telefono}}</td>
                    <td><span class="badge bg-warning fs-6">{{$task->email}}</span></td>
                    <td>
                        <a href="" class="btn btn-warning">Editar</a>
    
                        <form action="" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>
@endsection