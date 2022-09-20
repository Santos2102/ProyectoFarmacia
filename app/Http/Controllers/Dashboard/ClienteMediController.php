<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicamentoPost;
use App\Models\CliMedi;
use Illuminate\Http\Request;

class ClienteMediController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo view('dashboard.medicamento.cliente');
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
     * @param  \App\Models\CliMedi  $cliMedi
     * @return \Illuminate\Http\Response
     */
    public function show(CliMedi $cliMedi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CliMedi  $cliMedi
     * @return \Illuminate\Http\Response
     */
    public function edit(CliMedi $cliMedi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CliMedi  $cliMedi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CliMedi $cliMedi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CliMedi  $cliMedi
     * @return \Illuminate\Http\Response
     */
    public function destroy(CliMedi $cliMedi)
    {
        //
    }
}
