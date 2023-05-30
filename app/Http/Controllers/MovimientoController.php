<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovimientoSaveRequest;
use App\Models\CercaDecaGps;
use App\Models\LineaAmericana;
use App\Models\Movimiento;
use App\Models\TipoRemolque;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    public function index()
    {
        return view('movimientos/index')->with('movimientos', Movimiento::all());
    }

    public function create()
    {
        return view('movimientos/create', [
            'movimiento' => new Movimiento,
            'tiposRemolque' => TipoRemolque::all(),
            'lineasAmericanas' => LineaAmericana::all(),
            'cercasDecaGps' => CercaDecaGps::all(),
        ]);
    }

    public function store(MovimientoSaveRequest $request)
    {
        if(! $movimiento = Movimiento::create($request->validated()) )
            return back()->with('danger', 'Error al guardar movimiento, intenta nuevamente');

        return redirect()->route('movimientos.index')->with('success', "Se guardó movimiento {$movimiento->id}");
    }

    /**
     * Display the specified resource.
     */
    public function show(Movimiento $movimiento)
    {
        //
    }

    public function edit(Movimiento $movimiento)
    {
        return view('movimientos/edit', [
            'movimiento' => $movimiento,
            'tiposRemolque' => TipoRemolque::all(),
            'lineasAmericanas' => LineaAmericana::all(),
            'cercasDecaGps' => CercaDecaGps::all(),
        ]);
    }

    public function update(MovimientoSaveRequest $request, Movimiento $movimiento)
    {
        if(! $movimiento->fill($request->validated())->save() )
            return back()->with('danger', 'Error al actualizar movimiento, intenta nuevamente');

        return redirect()->route('movimientos.edit', $movimiento)->with('success', "Se actualizó movimiento {$movimiento->id}");
    }

    public function destroy(Movimiento $movimiento)
    {
        if(! $movimiento->delete() )
            return back()->with('danger', 'Error al eliminar movimiento, intentar nuevamente');

        return redirect()->route('movimientos.index')->with('success', "Movimiento {$movimiento->id} eliminado");
    }
}
