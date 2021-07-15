<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use Illuminate\Http\Request;

class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departaments = Departament::select(['id', 'departament'])->get();
        return response()->json([
            "data" => $departaments
        ]);
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
     * @param  \App\Models\Departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function show(Departament $departament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function edit(Departament $departament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departament $departament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departament  $departament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departament $departament)
    {
        //
    }
}
