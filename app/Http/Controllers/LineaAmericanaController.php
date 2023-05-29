<?php

namespace App\Http\Controllers;

use App\Models\LineaAmericana;
use Illuminate\Http\Request;

class LineaAmericanaController extends Controller
{
    public function index()
    {
        return view('lineas-americanas.index')->with('lineasAmericanas', LineaAmericana::orderBy('nombre')->get());
    }

    public function create()
    {
        return view('lineas-americanas.create')->with('lineaAmericana', new LineaAmericana());
    }

    public function store(Request $request)
    {
        if(! $lineaAmericana = LineaAmericana::create($request->all()) )
            return back()->with('danger', 'Error al guardar línea americana, intenta nuevamente');

        return redirect()->route('lineas_americanas.index')->with('success', "Se guardó línea americana {$lineaAmericana->nombre}");
    }

    public function show(LineaAmericana $lineaAmericana)
    {
        return view('lineas-americanas.show')->with('lineaAmericana', $lineaAmericana);
    }

    public function edit(LineaAmericana $lineaAmericana)
    {
        return view('lineas-americanas.edit')->with('lineaAmericana', $lineaAmericana);
    }

    public function update(Request $request, LineaAmericana $lineaAmericana)
    {
        if(! $lineaAmericana->fill( $request->all() )->save() )
            return back()->with('danger', 'Error al actualizar línea americana, intenta nuevamente');

        return redirect()->route('lineas_americanas.edit', $lineaAmericana)->with('success', 'Se actualizó línea americana correctamente');
    }

    public function destroy(LineaAmericana $lineaAmericana)
    {
        if(! $lineaAmericana->delete() )
            return back()->with('danger', 'Error al eliminar línea americana, intenta nuevamente');

        return redirect()->route('lineas_americanas.index')->with('success', "Línea americana {$lineaAmericana->nombre} eliminada");
    }
}
