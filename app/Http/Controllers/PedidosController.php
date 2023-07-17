<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Producto;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedidos::all();
        return view('modulos.Pedidos')->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new resource.
     */
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
       
        Pedidos::create([
            'estadoE'=>'Solicitado',
            'cantidad'=>0,
            'tipo'=>' ',
            'nombre'=>' ',
            'estadoP'=>'Sin pagar',
            'proveedor'=>' ',
            'precio'=>'0.00',
            'total'=>'0.00'
        ]);
        return redirect('Pedidos');
    }

    /**
     * Display the specified resource.
     */
    public function Gestionar($id)
    {
        $pedido = Pedidos::find($id);
        $productos = Producto::all();
        $clientes = Clientes::all();
        $productoP = DB::table('ordendecompras')->where('id',$id)->get();
        return view('modulos.Gestionar-Pedido', compact('pedido', 'productos', 'clientes', 'productoP'));
    }

    public function ProductoPedido($id)
    {
        $datos = request();
        $pedido = Pedidos::find($id);
        $cantidadN = $pedido->cantidad + $datos["cantidad"];
        $totalN = $datos["cantidad"] * $datos["precio"];
        DB::table('ordendecompras')->where('id', $id)->update([
            'cantidad'=>$cantidadN, 
            'tipo'=>$datos["tipo"], 
            'nombre'=>$datos["nombre"],
            'proveedor'=>$datos["proveedor"],
            'precio'=>$datos["precio"],
            'total'=>$totalN
        ]);
        return redirect('Gestionar-Pedido/'.$id);
    }
    public function CambiarEstado($id)
    {
        $pedido = Pedidos::find($id);
        if($pedido->estadoE == "Solicitado"){
            DB::table('ordendecompras')->where('id', $id)->update(['estadoE'=>'En Camino']);
        }else{
            DB::table('ordendecompras')->where('id', $id)->update(['estadoE'=>'Recibido']);
        }
        return redirect('Gestionar-Pedido/'.$id);
    }
}  