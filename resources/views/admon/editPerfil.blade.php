@extends('layouts.baseadmon')

@section('content')

<head>
    <link rel="stylesheet" href="../../css/styleUsuarios.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">    
</head>

<div class="row">
    <div class="col-12">
        <div>
            <h2>Actualizar Perfil</h2>
        </div>
        <div>
            <a href="{{route('perfiles.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    

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
    <form action="{{route('perfiles.update', $perfil)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombre del Rol:</strong>
                    <input type="text" name="nom_perfiles" class="form-control" placeholder="Nombre de rol" value="{{$perfiles->nom_perfil}}">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>



<!--<body>
    <div class="icon">
        <i class="bi bi-arrow-left-circle-fill"></i>
    </div>

    <title>ROLES DE USUARIO</title>
    
    <div>
        <a href="" class="btn btn-primary">Volver</a>
    </div>
    <div class="users-form">
       
        <form action="" method="POST">
            
            <div>
                <h2>ACTUALIZAR ROL</h2>
            </div>
            <input type="text" name="nom_rol" placeholder="NOMBRE DEL ROL">

            <strong>NOMBRE DEL ROL:</strong>
            <input type="text" name="nom_rol" class="form-control" placeholder="NOMBRE DEL ROL" value="">
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
</body>-->

@endsection