@extends('plantilla')

@section('contenido')

<div class="content-wrapper">
    <section class="content-header">
        <h1>GESTIONAR PEDIDO ID: {{ $pedido->id }}</h1>
        <h4>Fecha de Emisión: {{ $pedido->fecha }}</h4>
        @if($pedido->estadoE == "Solicitado")
        <h3>Estado Actual: <button class="btn btn-primary">Solicitado</button>
        <form action="{{ url('CambiarE/'.$pedido->id) }}" method="post">
            @csrf
            Cambiar a: <button class="btn btn-warning">En camino</button></h3>
        </form>
        @elseif($pedido->estadoE == "En Camino")
        <h3>Estado Actual: <button class="btn btn-warning">En camino</button>
        <form action="{{ url('CambiarE/'.$pedido->id) }}" method="post">
            @csrf
            Cambiar a: <button class="btn btn-success">Recibido</button></h3>
        </form>
        @else
        <h3>Estado Actual: <button class="btn btn-success">Recibido</button>
        @endif
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                @if($pedido->estadoE != "Recibido")
                    <h2>Agregar Producto al pedido:</h2>
                    <h4>Registrados:</h4>
                    <form method="post">
                        @csrf
                        <div class="col-md-3">
                            <select name="nombre" id="select2">
                                <option value="">Elegir...</option>
                                @foreach($productos as $producto)
                                    <option value="{{ $producto->nombre }}">{{ $producto->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="cantidad" min="1" placeholder="Cantidad">
                        </div>
                        <div class="col-md-4">
                            <select name="tipo" class="form-control input-lg" required="">
                                <option value="">Seleccionar...</option>
                                <option value="Abarrotes">Abarrotes</option>
                                <option value="Alimentos sin conservantes">Alimentos sin conservantes</option>
                            </select>
                        </div>
                            
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="precio" min="1" placeholder="Precio">
                        </div>
                        <!-- <div class="col-md-4">
                            <input type="number" class="form-control" name="total" min="1" placeholder="Total">
                        </div> -->
                        <div class="col-md-4">
                            <select name="proveedor" id="select2">
                                <option value="">Elegir...</option>
                                @foreach($clientes as $clientes)
                                    <option value="{{ $clientes->nombre }}">{{ $clientes->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Agregar a la Orden de Pedido</button>
                    </form>
                    <hr>
                @endif
                <table class="table table-hover table-bordered table-striped DT1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FECHA</th>
                            <th>CANTIDAD</th>
                            <th>TIPO</th>
                            <th>NOMBRE</th>
                            <th>PROVEEDOR</th>
                            <th>PAGO</th>
                            <th>PRECIO</th>
                            <th>TOTAL</th>
                            <th>ESTADO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productoP as $pe)
                                    <tr>
                                        <td>{{ $pe->id }}</td>
                                        <td>{{ $pe->fecha }}</td>
                                        <td>{{ $pe->cantidad }}</td>
                                        <td>{{ $pe->tipo }}</td>
                                        <td>{{ $pe->nombre }}</td>
                                        <td>{{ $pe->proveedor }}</td>
                                        <td>{{ $pe->estadoP }}</td>
                                        <td>{{ $pe->precio }}</td>
                                        <td>{{ $pe->total }}</td>
                                        <td>
                                            @if($pe->estadoE == "Solicitado")
                                                <button class="btn btn-primary">{{ $pe->estadoE }}</button>
                                            @elseif($pe->estadoE == "Solicitado")
                                                <button class="btn btn-warning">{{ $pe->estadoE }}</button>
                                            @else
                                                <button class="btn btn-success">{{ $pe->estadoE }}</button>
                                            @endif
                                        </td>
                                        
                                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>
    
@endsection