<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Http\Requests\TipoRequest;

/**
 * Class TipoController
 * @package App\Http\Controllers
 */
class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = Tipo::all();

        return view('tipo.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo = new Tipo();
        return view('tipo.create', compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoRequest $request)
    {
        Tipo::create($request->validated());

        return redirect()->route('tipos.index')
            ->with('success', 'Tipo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tipo = Tipo::find($id);

        return view('tipo.show', compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipo = Tipo::find($id);

        return view('tipo.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoRequest $request, Tipo $tipo)
    {
        $tipo->update($request->validated());

        return redirect()->route('tipos.index')
            ->with('success', 'Tipo updated successfully');
    }

    public function destroy($id)
    {
        Tipo::find($id)->delete();

        return redirect()->route('tipos.index')
            ->with('success', 'Tipo deleted successfully');
    }
}
