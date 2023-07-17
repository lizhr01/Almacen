<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::all();
        return view('modulos.Productos', compact('productos'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = request();
        Producto::create([
            'tipo'=>$datos["tipo"],
            'nombre'=>$datos["nombre"],
            'codigo'=>$datos["codigo"],
            'stock'=>$datos["stock"],
            'fecha'=>$datos["fecha"],
            'precio'=>$datos["precio"],
        ]);
        return redirect('Productos')->with('ProductoCreado','OK');
    }

    public function show(Producto $producto)
    {
        //
    }

    public function edit($producto)
    {
        $productos = Producto::all();

        $productoE = Producto::find($producto);
        return view('modulos.Productos', compact('productos', 'productoE'));
    }

    public function update(Request $request, $producto)
    {
        
        $datos = request()->validate([
            'tipo'=>['required'],
            'nombre'=>['required'],
            'codigo'=>['required'],
            'stock'=>['required'],
            'fecha'=>['required'],
            'precio'=>['required']
        ]);

        $PRODUCTO = Producto::find($producto);
        $PRODUCTO->tipo = $datos["tipo"];
        $PRODUCTO->nombre = $datos["nombre"];
        $PRODUCTO->codigo = $datos["codigo"];
        $PRODUCTO->stock = $datos["stock"];
        $PRODUCTO->fecha = $datos["fecha"];
        $PRODUCTO->precio = $datos["precio"];
        $PRODUCTO->save();
        return redirect('Productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($producto)
    {
        $productoQ = Producto::find($producto);
        Producto::destroy($producto);
        return redirect('Productos');
    }
}
