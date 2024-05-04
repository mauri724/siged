<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGED</title>
    <link rel="stylesheet" href="../css/stylepaginas.css">
    <script src="https://kit.fontawesome.com/f07ab53199.js" crossorigin="anonymous">
    </script>
    <script defer src="../js/js.js"></script>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo nav-link">SIGED</a>
            <button class="nav-toggle" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>
              </button>
            <ul class="nav-menu nav-menu_visible">
                <li class="nav-menu-item"><a href="{{route('direcc.index')}}" class="nav-menu-link nav-link">Inicio</a></li>
                <li class="nav-menu-item"><a href="{{'admon'}}" class="nav-menu-link nav-link">Admon</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Escenarios</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Mantenimientos</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Solicitud</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link nav-menu.link_active">Contacto</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Usuario</a></li>
                <li class="nav-menu-item"><a href="../metodos/logout.php" class="nav-menu-link nav-link">Cerrar Sesion</a></li>
                
            </ul>
        </nav>
    </header> 
   </legend>  
        <div class="container">
            @yield('content')
        </div>
</body>
</html>