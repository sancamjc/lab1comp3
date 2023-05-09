<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datos;


class datosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datoss = datos::paginate();
        return view('datos.index', compact('datoss'))
        ->with('i', (request()->input('page', 1)-1)* $datoss->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $owners = Owner::all();
        return view('datos.create', compact('owners' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar
        request()->validate(datos::$rules);

        //recepcionar todos los datos
        $datosData = request()->except("_token");
        datos::insert($datosData);
        return redirect()->route('datos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //recuperar los datos
        $datos=datos::findOrFail($id);
        $owners=Owner::all();
        return view('datos.edit', compact('datos','owners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datosData=request()->except(['_token', '_method']);
        datos::where('id', '=', $id)->update($datosData);
        return redirect('datos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        datos::destroy($id);
        return redirect('datos');
    }
}
