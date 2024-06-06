<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Http\Requests\MarcaRequest;

/**
 * Class MarcaController
 * @package App\Http\Controllers
 */
class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::all();

        return view('marca.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marca = new Marca();
        return view('marca.create', compact('marca'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MarcaRequest $request)
    {
        Marca::create($request->validated());

        return redirect()->route('marcas.index')
            ->with('success', 'Marca creada correcta.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $marca = Marca::find($id);

        return view('marca.show', compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $marca = Marca::find($id);

        return view('marca.edit', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MarcaRequest $request, Marca $marca)
    {
        $marca->update($request->validated());

        return redirect()->route('marcas.index')
            ->with('success', 'Marca actualizada correctamente');
    }

    public function destroy($id)
    {
        Marca::find($id)->delete();

        return redirect()->route('marcas.index')
            ->with('success', 'Marca borrado correctamente');
    }
}
