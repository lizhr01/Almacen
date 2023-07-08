@extends('plantilla')

@section('contenido')

<div class="content-wrapper">

    <section class="content-header">

        <h1>Gestor de Usuarios </h1>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header">

                <button class="btn btn-primary" data-toggle="modal" data-target="#CrearUsuario">Crear nuevo usuario</button>

            </div>

            <div class="box-body">
   
                <table class="table table-bordered table-hover table-striped DT1">
                    <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th></th>

                        </tr>
                    </thead>
  
                    <tbody>

                          @foreach ($usuarios as $user)
                          <tr>

                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->rol }}</td>

                            <td>
                                <a href="{{ url('Editar-Usuario/'.$user->id) }}">
                                    <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                </a>
                                
                                <button class="btn btn-danger EliminarUsuario" Uid="{{$user->id}}" 
                                Usuario="{{$user->name}}"><i class="fa fa-trash"></i></button>

                            </td>
                          </tr>
                          @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </section>

</div>

{{-- MODAL CREAR USUARIO --}}
<div class="modal fade" id="CrearUsuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                @csrf
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Tipo de Usuario:</h2>
                            <select name="rol" class="form-control input-lg" required="">
                                <option value="">Seleccionar...</option>
                                <option value="Administrador">Administrador</option><!-- TODO -->
                                <option value="Jefe de Almacén">Jefe de Almacén</option><!-- LISTA DE PEDIDOS CON EDICION -->
                                <option value="Jefe de Compras">Jefe de Compras</option><!-- ORDEN DE COMPRA -->
                                <option value="Proveedor">Proveedor</option><!-- LISTA DE PEDIDOS -->
                            </select>
                        </div>
                        <div class="form-group">
                            <h2>Nombre:</h2>
                            <input type="text" class="form-control input-lg" name="name" required="" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <h2>Email:</h2>
                            <input type="email" class="form-control input-lg" name="email" required="">
                            @error('email')
                                <div class="alert alert-danger">El email ya existe</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h2>Contraseña:</h2>
                            <input type="text" class="form-control input-lg" name="password" required="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Crear</button>
                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    $exp = explode("/", $_SERVER["REQUEST_URI"]);
?>

{{-- MODAL EDITAR USUARIO --}}
@if($exp[3] == "Editar-Usuario")
<div class="modal fade" id="EditarUsuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ url('actualizar-Usuario/'.$user->id) }}">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Tipo de Usuario:</h2>
                            <select name="rol" class="form-control input-lg" required="">
                                <option value="{{ $usuario->rol }}">{{ $usuario->rol }}</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Jefe de Almacén">Jefe de Almacén</option>
                                <option value="Jefe de Compras">Jefe de Compras</option>
                                <option value="Proveedor">Proveedor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h2>Nombre:</h2>
                            <input type="text" class="form-control input-lg" name="name" required="" value="{{ $usuario->name }}">
                        </div>
                        <div class="form-group">
                            <h2>Email:</h2>
                            <input type="email" class="form-control input-lg" name="email" required="" value="{{ $usuario->email }}">
                            @error('email')
                                <div class="alert alert-danger">El email ya existe</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h2>Contraseña:</h2>
                            <input type="text" class="form-control input-lg" name="password" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button><!--href="{{ url('Usuarios') }}"-->
                </div>
            </form>
        </div>
    </div>
</div>
@endif

    
@endsection