<?php

namespace App\Http\Controllers;

use App\Models\TipoRemolque;
use Illuminate\Http\Request;

class TipoRemolqueController extends Controller
{
    public function index()
    {
        return view('tipos-remolque/index')->with('tiposRemolque', TipoRemolque::all());
    }

    public function create()
    {
        return view('tipos-remolque/create')->with('tipoRemolque', new TipoRemolque);
    }

    public function store(Request $request)
    {
        if(! $tipoRemolque = TipoRemolque::create($request->all() ))
            return back()->with('danger', 'Error al guardar tipo de remolque, intenta nuevamente');

        return redirect()->route('tipos_remolque.index')->with('success', "Se guardó tipo de remolque {$tipoRemolque->nombre}");
    }

    public function show(TipoRemolque $tipoRemolque)
    {
        return view('tipos-remolque/show')->with('tipoRemolque', $tipoRemolque);
    }

    public function edit(TipoRemolque $tipoRemolque)
    {
        return view('tipos-remolque/edit')->with('tipoRemolque', $tipoRemolque);
    }

    public function update(Request $request, TipoRemolque $tipoRemolque)
    {
        if(! $tipoRemolque->fill($request->all())->save() )
            return back()->with('danger', 'Error al actualizar tipo de remolque, intenta nuevamente');

        return redirect()->route('tipos_remolque.edit', $tipoRemolque)->with('success', "Se actualizo tipo de remolque correctamente");
    }

    public function destroy(TipoRemolque $tipoRemolque)
    {
        if(! $tipoRemolque->delete() )
            return back()->with('danger', 'Error al eliminar tipo de remolque, intenta nuevamente');

        return redirect()->route('tipos_remolque.index')->with('success', "Tipo de remolque {$tipoRemolque->nombre} eliminado");
    }
}
