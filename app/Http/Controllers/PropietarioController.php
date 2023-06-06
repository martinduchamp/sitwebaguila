<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropietarioSaveRequest;
use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index()
    {
        return view('propietarios.index')->with('propietarios', Propietario::orderBy('nombre')->get());
    }

    public function create()
    {
        return view('propietarios.create')->with('propietario', new Propietario());
    }

    public function store(PropietarioSaveRequest $request)
    {
        if (! $propietario = Propietario::create($request->validated())) {
            return back()->with('danger', 'Error al guardar propietario, intenta nuevamente');
        }

        return redirect()->route('propietarios.index')->with('success', "Se guardó el propietario {$propietario->nombre}");
    }

    public function show(Propietario $propietario)
    {
        return view('propietarios.show')->with('propietario', $propietario);
    }

    public function edit(Propietario $propietario)
    {
        return view('propietarios.edit')->with('propietario', $propietario);
    }

    public function update(PropietarioSaveRequest $request, Propietario $propietario)
    {
        if (! $propietario->fill($request->validated())->save()) {
            return back()->with('danger', 'Error al actualizar propietario, intenta nuevamente');
        }

        return redirect()->route('propietarios.edit', $propietario)->with('success', 'Se actualizó el propietario correctamente');
    }

    public function destroy(Propietario $propietario)
    {
        if (! $propietario->delete()) {
            return back()->with('danger', 'Error al eliminar propietario, intenta nuevamente');
        }

        return redirect()->route('propietarios.index')->with('success', "Propietario {$propietario->nombre} eliminado");
    }
}
