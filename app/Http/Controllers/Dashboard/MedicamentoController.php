<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicamentoPost;
use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicamento=Medicamento::orderBy('created_at','asc') -> cursorpaginate(5);
        echo view('dashboard.medicamento.index',['medicamento'=>$medicamento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo view ('dashboard.medicamento.create',["medicamento"=> new medicamento()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicamentoPost $request)
    {
        //
            Medicamento::create($request->validated());
            return back()->with('status','Muchas gracias, Medicamento creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamento $medicamento)
    {
        //
        echo view ('dashboard.medicamento.show', ["medicamento" =>$medicamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamento $medicamento)
    {
        //
        echo view ('dashboard.medicamento.edit',["medicamento"=>$medicamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMedicamentoPost $request, Medicamento $medicamento)
    {
        //
        $medicamento->update($request->validated());
        return back()->with('status', 'Gracias, Medicamento actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamento $medicamento)
    {
        //
        $medicamento->delete();
        return back()->with('status','Gracias, Medicamento borrado exitosamente');
    }
}
