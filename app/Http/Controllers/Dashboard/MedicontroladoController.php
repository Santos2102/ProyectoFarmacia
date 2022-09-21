<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicontroladoPost;
use App\Models\Medicontrolado;
use Illuminate\Http\Request;

class MedicontroladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicontrolado=Medicontrolado::orderBy('created_at','asc') -> cursorpaginate(5);
        echo view('dashboard.medicontrolado.index',['medicontrolado'=>$medicontrolado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo view ('dashboard.medicontrolado.create',["medicontrolado"=> new medicontrolado()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicontroladoPost $request)
    {
        Medicontrolado::create($request->validated());
        return back()->with('status','Muchas gracias, Medicamento creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicontrolado  $medicontro
     * @return \Illuminate\Http\Response
     */
    public function show(Medicontrolado $medicontrolado)
    {
        //
        echo view ('dashboard.medicontrolado.show', ["medicontrolado" =>$medicontrolado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicontrolado  $medicontro
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicontrolado $medicontrolado)
    {
        //
        echo view ('dashboard.medicontrolado.edit',["medicontrolado"=>$medicontrolado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicontrolado  $medicontro
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMedicontroladoPost $request, Medicontrolado $medicontrolado)
    {
        //
        $medicontrolado->update($request->validated());
        return back()->with('status', 'Gracias, Medicamento actualizado exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicontrolado  $medicontro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicontrolado $medicontrolado)
    {
        //
        $medicontrolado->delete();
        return back()->with('status','Gracias, Medicamento borrado exitosamente');
    }
}
