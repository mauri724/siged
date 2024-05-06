@extends('layouts.baseadmon')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">LISTA DE ROLES</h2>
        </div>
        <div>
            <a href="{{route('perfiles.create')}}" class="btn btn-primary">Crear perfil</a>
        </div>
    </div>
<!-- trae de mi controlador el mensaje de 
ingreso exito en caso de que no sea asi no muestra nada-->
    @if (Session::get('success'))
    
    <div class="alert alert-success mt-2">
        <strong>{{Session::get('success')}}</strong>
    </div>
    @endif
    <div class="col-12 mt-4">
        <table class="table table-bordered text-black">
            <tr class="text-secondary">
                <th>Id Rol</th>
                <th>Nombre de Rol</th>
                <th>Acciones</th>
            </tr>

            @foreach ($perfilr as $perfil)
                <tr>
                    <td class="fw-bold">{{$perfil->idPerfil}}</td>
                    <td>{{$perfil->nom_perfil}}</td>
                    <td>
                        <a href="{{route('perfiles.edit',$perfilr)}}" class="btn btn-warning">Editar</a>
                        <form action="" method="post" class="d-inline">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </table>
        {{$perfilr->links()}}
    </div>
</div>
@endsection