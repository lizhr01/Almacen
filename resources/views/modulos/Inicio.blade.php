@extends('plantilla')

@section('contenido')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Inicio</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{ count($ventas) }}</h3>
                            <p>Orden de Compras</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                        <a href="{{ url('Ventas') }}" class="small-box-footer">Ir a Orden de compra <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ count($producto) }}</h3>
                            <p>Orden de Compras</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                        <a href="{{ url('Productos') }}" class="small-box-footer">Ir Productos<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
    
@endsection