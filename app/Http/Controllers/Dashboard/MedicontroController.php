<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Medicontrolado;
use Illuminate\Http\Request;

class MedicontroController extends Controller
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
        echo view('dashboard.medicontrolado.cliente',['medicontrolado'=>$medicontrolado]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicontrolado  $medicontrolado
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
     * @param  \App\Models\Medicontrolado  $medicontrolado
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicontrolado $medicontrolado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicontrolado  $medicontrolado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicontrolado $medicontrolado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicontrolado  $medicontrolado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicontrolado $medicontrolado)
    {
        //
    }
}
