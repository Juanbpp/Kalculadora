<?php

namespace App\Http\Controllers;

use App\Models\Codificacion;
use App\Http\Requests\CodificacioneRequest;

/**
 * Class CodificacionController
 * @package App\Http\Controllers
 */
class CodificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $codificaciones = Codificacion::all();

        return view('codificaciones.index', compact('codificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $codificacion = new Codificacion();
        return view('codificaciones.create', compact('codificacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CodificacioneRequest $request)
    {
        Codificacion::create($request->validated());

        return redirect()->route('codificaciones.index')
            ->with('success', 'Codificacion created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $codificacion = Codificacion::find($id);

        return view('codificaciones.show', compact('codificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $codificacion = Codificacion::find($id);

        return view('codificaciones.edit', compact('codificacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CodificacioneRequest $request, Codificacion $codificacion)
    {
        $codificacion->update($request->validated());

        return redirect()->route('codificaciones.index')
            ->with('success', 'Codificacione updated successfully');
    }

    public function destroy($id)
    {
        Codificacion::find($id)->delete();

        return redirect()->route('codificaciones.index')
            ->with('success', 'Codificacion deleted successfully');
    }
}
