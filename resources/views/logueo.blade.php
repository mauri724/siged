<!DOCTYPE html>
<html lang="en">
@if (Session::get('success'))
    <div class="alert alert-success mt-2">
        <strong>{{Session::get('success')}}</strong>
    </div>
    @endif

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGED - Iniciar sesión</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;700;900&display=swap" rel="stylesheet">
    <!-- Mis estilos -->
    <link rel="stylesheet" href="{{ asset('css/styleindex.css') }}">
</head>
<body class="container-fluid">

    <main class="row">

        <section class="col-md-6" id="panel-left">
            <div class="container align-self-center">
                <div class="row">
                    <h1 class="col-12 text-center">Incio de Sesion de SIGED</h1>
                </div>
                <div class="row">
                    <p class="col-12 text-center description">
                        Bienvenido, nos da gusto tenerte <br/> de nuevo aquí
                    </p>
                </div>
                <div class="row mt-5">                    
                
                </div>
            </div>
        </section>


        <section class="col-md-6" id="panel-right">
            <div class="container">
                <div class="row mb-5">
                    <h2 class="col-12 text-center">Iniciar sesión</h2>
                </div>
                <div class="row">                    
                    <form action="{{'loguiar'}}" class="col-12 col-md-8 offset-md-2" method="POST">
                    @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" >
                        </div>
                        <div class="form-group text-center pt-4">
                            <input type="submit" class="btn btn-primary" value="Ingresar">
                        </div>
                        <div class="alcaldia"><img src="../img/alcaldia-escudo.png" width="200" height="150"/></div>
                    </form>
                </div>                
            </div>
        </section>
    </main>
</body>
</html>