<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Http\Requests\RegistroRequest;

/**
 * Class RegistroController
 * @package App\Http\Controllers
 */
class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Registro::all();

        return view('registro.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registro = new Registro();
        return view('registro.create', compact('registro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistroRequest $request)
    {
        Registro::create($request->validated());

        return redirect()->route('registros.index')
            ->with('success', 'Registro creado correcto.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $registro = Registro::find($id);

        return view('registro.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $registro = Registro::find($id);

        return view('registro.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegistroRequest $request, Registro $registro)
    {
        $registro->update($request->validated());

        return redirect()->route('registros.index')
            ->with('success', 'Registro actualizado correctamente');
    }

    public function destroy($id)
    {
        Registro::find($id)->delete();

        return redirect()->route('registros.index')
            ->with('success', 'Registro borrado correctamente');
    }
}
