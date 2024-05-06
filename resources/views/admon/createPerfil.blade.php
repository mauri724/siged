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

    <title>PERFIL DE USUARIO</title>
    <div class="users-form">
        @if ($errors->any())
        <div class="alert alert-danger mt-2" >
            <strong>Estos campos son obligatorios!</strong> Algo fue mal..<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{route('perfiles.store')}}" method="POST">
            @csrf
            <h1>CREAR PERFIL</h1>
            <input type="text" name="nom_perfil" placeholder="NOMBRE DEL PERFIL">
            
            
            <input type="submit" value="Agregar perfil">
        </form>
</body>

@endsection