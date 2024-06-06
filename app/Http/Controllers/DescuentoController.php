<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use App\Http\Requests\DescuentoRequest;

/**
 * Class DescuentoController
 * @package App\Http\Controllers
 */
class DescuentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $descuentos = Descuento::all();

        return view('descuento.index', compact('descuentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $descuento = new Descuento();
        return view('descuento.create', compact('descuento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DescuentoRequest $request)
    {
        Descuento::create($request->validated());

        return redirect()->route('descuentos.index')
            ->with('success', 'Descuento creado correcto.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $descuento = Descuento::find($id);

        return view('descuento.show', compact('descuento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $descuento = Descuento::find($id);

        return view('descuento.edit', compact('descuento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DescuentoRequest $request, Descuento $descuento)
    {
        $descuento->update($request->validated());

        return redirect()->route('descuentos.index')
            ->with('success', 'Descuento actualizado correctamente');
    }

    public function destroy($id)
    {
        Descuento::find($id)->delete();

        return redirect()->route('descuentos.index')
            ->with('success', 'Descuento borrado correctamente');
    }
}
