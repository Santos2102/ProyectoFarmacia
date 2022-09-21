<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicontroladoPost;
use App\Models\medicontro;
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
    public function store(Request $request)
    {
        Medicontrolado::create($request->validated());
        return back()->with('status','Muchas gracias, Medicamento creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medicontro  $medicontro
     * @return \Illuminate\Http\Response
     */
    public function show(medicontro $medicontro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medicontro  $medicontro
     * @return \Illuminate\Http\Response
     */
    public function edit(medicontro $medicontro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medicontro  $medicontro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicontro $medicontro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medicontro  $medicontro
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicontro $medicontro)
    {
        //
    }
}
