@extends('plantilla')

@section('contenido')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Gestor de Proveedores</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#CrearProveedor">Crear Nuevo Proveedor</button>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped table-hover DT1">
                    <thead>
                        <tr>
                            <th>Proveedor</th>
                            <th>Documento</th>
                            <th>Fecha de nacimiento</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $c)
                        <tr>
                            <td>{{ $c->nombre }}</td>
                            <td>{{ $c->documento }}</td>
                            <td>{{ $c->fechaNac }}</td>
                            <td>{{ $c->direccion }}</td>
                            <td>{{ $c->telefono }}</td>
                            <td>
                                <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>
<div class="modal fade" id="CrearProveedor">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post">
                @csrf
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Nombre:</h2>
                            <input type="text" class="form-control input-lg" name="nombre" required="">
                        </div>
                        <div class="form-group">
                            <h2>Documento:</h2>
                            <input type="text" class="form-control input-lg" name="documento" required="">
                        </div>
                        <div class="form-group">
                            <h2>Fecha de Nacimiento:</h2>
                            <input type="text" class="form-control input-lg" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fechaNac" required="">
                        </div>
                        <div class="form-group">
                            <h2>Direccion:</h2>
                            <input type="text" class="form-control input-lg" name="direccion" required="">
                        </div>
                        <div class="form-group">
                            <h2>Teléfono:</h2>
                            <input type="text" class="form-control input-lg" data-inputmask="'mask': '+(99) 999 999 999'" data-mask name="telefono" required="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>  
@endsection