<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Miscelaneo;
use Illuminate\Http\Request;

class ClienteMisceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $miscelaneo=Miscelaneo::orderBy('created_at','asc') -> cursorpaginate(5);
        echo view('dashboard.miscelaneo.cliente',['miscelaneo'=>$miscelaneo]);
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
     * @param  \App\Models\CliMisce  $cliMisce
     * @return \Illuminate\Http\Response
     */
    public function show(Miscelaneo $miscelaneo)
    {
        //
        echo view ('dashboard.miscelaneo.show', ["miscelaneo" =>$miscelaneo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miscelaneo  $cliMisce
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
     * @param  \App\Models\CliMisce  $cliMisce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miscelaneo $miscelaneo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miscelaneo $cliMisce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miscelaneo $miscelaneo)
    {
        //
    }
}
