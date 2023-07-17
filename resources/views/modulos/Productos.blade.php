@extends('plantilla')

@section('contenido')

<div class="content-wrapper">
    <section class="content-header">
        <h1>GESTOR DE INVENTARIO</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#AgregarProducto">Agregar Producto</button>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover table-striped DT1">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $p)
                        <tr>
                            <td>{{ $p->nombre }}</td>
                            <td>S/ {{ $p->precio }}</td>
                            <td>{{ $p->fecha }}</td>
                            
                                @if($p->stock < 6)
                                <td><button class="btn btn-danger">{{ $p->stock }}</button></td>
                                @elseif($p->stock > 5 && $p->stock < 11)
                                <td><button class="btn btn-warning">{{ $p->stock }}</button></td>
                                @else
                                <td><button class="btn btn-success">{{ $p->stock }}</button></td>
                                @endif
                            
                            <td>
                                <a href="{{ url('Producto-E/'.$p->id) }}">
                                    <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                </a>
                                <button class="btn btn-danger QuitarProducto" Lid="{{ $p->id }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>

<div class="modal fade" id="AgregarProducto">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Nombre:</h2>
                            <input type="text" class="form-control input-lg" name="nombre" required="">
                        </div>
                        <div class="form-group">
                            <h2>Codigo:</h2>
                            <input type="text" class="form-control input-lg" name="codigo" required="">
                        </div>
                        <div class="form-group">
                            <h2>Categoria:</h2>
                            <select name="tipo" class="form-control input-lg" required="">
                                <option value="">Seleccionar...</option>
                                <option value="Abarrotes">Abarrotes</option>
                                <option value="Alimentos sin conservantes">Alimentos sin conservantes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h2>Fecha de caducidad:</h2>
                            <input type="text" class="form-control input-lg" name="fecha" data-inputmask="'alias':'dd/mm/yyyy'" data-mask required="">
                        </div>
                        <div class="form-group">
                            <h2>Stock:</h2>
                            <input type="number" class="form-control input-lg" name="stock" required="">
                        </div>
                        <div class="form-group">
                            <h2>Precio:</h2>
                            <div class="input-group">
                                <span class="input-group-addon">S/</span>
                                <input type="text" class="form-control input-lg" name="precio" required="">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Agregar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$exp = explode('/', $_SERVER["REQUEST_URI"]);
?>
@if($exp[3] == "Producto-E")
<div class="modal fade" id="EditarProducto">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data" action="{{ url('Producto-A/'.$productoE->id) }}"> 
      
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Nombre:</h2>
                            <input type="text" class="form-control input-lg" value="{{ $productoE->nombre }}" name="nombre" required="">
                        </div>
                        <div class="form-group">
                            <h2>Codigo:</h2>
                            <input type="text" class="form-control input-lg" value="{{ $productoE->codigo }}" name="codigo" required="">
                        </div>
                        <div class="form-group">
                            <h2>Categoria:</h2>
                            <select name="tipo" class="form-control input-lg" value="" required="">
                                <option value="{{ $productoE->tipo }}">{{ $productoE->tipo }}</option>
                                <option value="Abarrotes">Abarrotes</option>
                                <option value="Alimentos sin conservantes">Alimentos sin conservantes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h2>Fecha de Ingreso:</h2>
                            <input type="text" class="form-control input-lg" value="{{ $productoE->fecha }}" name="fecha" data-inputmask="'alias':'dd/mm/yyyy'" data-mask required="">
                        </div>
                        <div class="form-group">
                            <h2>Stock:</h2>
                            <input type="number" class="form-control input-lg" value="{{ $productoE->stock }}"  name="stock" required="">
                        </div>
                        <div class="form-group">
                            <h2>Precio:</h2>
                            <div class="input-group">
                                <span class="input-group-addon">S/</span>
                                <input type="text" class="form-control input-lg" value="{{ $productoE->precio }}" name="precio" required="">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>  
@endif
@endsection