<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('modulos.Clientes')->with('clientes', $clientes);
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
        Clientes::create([
            'nombre'=>$datos["nombre"],
            'telefono'=>$datos["telefono"],
            'documento'=>$datos["documento"],
            'direccion'=>$datos["direccion"],
            'fechaNac'=>$datos["fechaNac"],
        ]);
        return redirect('Proveedores')->with('ClienteCreado', 'OK');
    }

   
    public function edit($cli)
    {
        $cli = Clientes::find($cli);
        $clientes =Clientes::all();
        return view('modulos.Clientes', compact('cli', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $datos = request();
        DB::table('clientes')->where('id', $id)->update(['nombre'=>$datos["nombre"], 'documento'=>$datos["documento"], 'fechaNac'=>$datos["fechaNac"], 'telefono'=>$datos["telefono"], 'direccion'=>$datos["direccion"]]);
        return redirect('Proveedores')->with('ClienteActualizado', 'OK');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Clientes::destroy($id);
        return redirect('Proveedores');
    }
}
