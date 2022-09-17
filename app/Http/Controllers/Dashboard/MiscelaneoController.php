<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMiscelaneoPost;
use App\Models\Miscelaneo;
use Illuminate\Http\Request;

class MiscelaneoController extends Controller
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
        echo view ('dashboard.miscelaneo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMiscelaneoPost $request)
    {
        //
            Miscelaneo::create($request->validated());
            return back()->with('status','Muchas gracia el miscelaneo ha sido creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miscelaneo  $miscelaneo
     * @return \Illuminate\Http\Response
     */
    public function show(Miscelaneo $miscelaneo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miscelaneo  $miscelaneo
     * @return \Illuminate\Http\Response
     */
    public function edit(Miscelaneo $miscelaneo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miscelaneo  $miscelaneo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miscelaneo $miscelaneo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miscelaneo  $miscelaneo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miscelaneo $miscelaneo)
    {
        //
    }
}
