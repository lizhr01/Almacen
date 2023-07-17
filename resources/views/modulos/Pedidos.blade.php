@extends('plantilla')

@section('contenido')

<div class="content-wrapper">
    <section class="content-header">
        <h1>GESTOR DE PEDIDOS</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="col-md-6">
                    <form action="{{ url('Pedidos') }}" method="post">
                        @csrf
                        <div class="row">
                            <!-- <div class="col-md-6">
                                <h2>Fecha de Emisión: </h2>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>   
                                    </div>
                                    <input type="text" name="fecha" class="form-control pull-right date1" id="" autocomplete="off">
                                </div>
                            </div> -->
                            <!-- <div class="col-md-6">
                                <h2>Fecha de Entrega: </h2>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>   
                                    </div>
                                    <input type="text" name="fecha_entrega" class="form-control pull-right date1" id="" autocomplete="off">
                                </div>
                            </div> -->
                            <div class="col-md-4">
                                <br>
                                <button class="btn btn-primary" type="submit">Crear Nueva Orden de Compra</button>
                            </div>
                        </div>
                        
                    
                </div>
                
                </form>
            </div>
            <div class="box-body">
                <a href="{{ url('Pedidos') }}">
                    <button class="btn btn-default">Todos</button>
                </a>
                <a href="{{ url('Pedidos-Solicitados') }}">
                    <button class="btn btn-primary">Solicitados</button>
                </a>
                <a href="{{ url('Pedidos-en-Camino') }}">
                    <button class="btn btn-warning">En camino</button>
                </a>
                <a href="{{ url('Pedidos-Recibidos') }}">
                    <button class="btn btn-success">Recibidos</button>
                </a>
                <br><br>
                <table class="table table-bordered table-hover table-striped DT1">
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
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                        $exp = explode('/', $_SERVER["REQUEST_URI"]);
                    ?>
                    <tbody>
                        @foreach($pedidos as $pe)
                            @if($exp[3]=="Pedidos")
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
                                    @if($pe->estadoE == 'Solicitado')
                                        <td>
                                            <button class="btn btn-primary">{{ $pe->estadoE }}</button>
                                        </td>
                                    @elseif($pe->estadoE == 'En Camino')
                                        <td>
                                            <button class="btn btn-warning">{{ $pe->estadoE }}</button>
                                        </td>
                                    @else
                                        <td>
                                            <button class="btn btn-success">{{ $pe->estadoE }}</button>
                                        </td>
                                    @endif
                                    <td>
                                        <a href="{{ url('Gestionar-Pedido/'.$pe->id) }}">
                                            <button class="btn btn-default">Gestionar</button>
                                        </a>
                                    </td>
                                </tr>
                            @elseif($exp[3]=="Pedidos-Solicitado")
                                @if($pe->estadoE=="Solicitado")
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
                                            <button class="btn btn-primary">{{ $pe->estadoE }}</button>
                                        </td>
                                        
                                        <td>
                                            <a href="{{ url('Gestionar-Pedido/'.$pe->id) }}">
                                                <button class="btn btn-default">Gestionar</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @elseif($exp[3]=="Pedidos-en-Camino")
                                @if($pe->estadoE=="En Camino")
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
                                            <button class="btn btn-warning">{{ $pe->estadoE }}</button>
                                        </td>
                                        
                                        <td>
                                            <a href="{{ url('Gestionar-Pedido/'.$pe->id) }}">
                                                <button class="btn btn-default">Gestionar</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @else
                                @if($pe->estadoE=="Recibido")
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
                                            <button class="btn btn-success">{{ $pe->estadoE }}</button>
                                        </td>
                                        
                                        <td>
                                            <a href="{{ url('Gestionar-Pedido/'.$pe->id) }}">
                                                <button class="btn btn-default">Gestionar</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endif
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>
    
@endsection