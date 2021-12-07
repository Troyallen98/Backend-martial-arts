<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePosition_techniqueRequest;
use App\Http\Requests\UpdatePosition_techniqueRequest;
use App\Models\Position_technique;


class PositionTechniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Position_technique::all();
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
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Position_technique $position_technique)
    {
        $position_technique = new Position_technique();
        $position_technique->position_id = $request->position()->id;
        $position_technique->technique_id = $request->technique()->id;
        $position_technique->inverse_tech_id = $request->inverse_tech()->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Position_technique  $position_technique
     * @return \Illuminate\Http\Response
     */
    public function show(Position_technique $position_technique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Position_technique  $position_technique
     * @return \Illuminate\Http\Response
     */
    public function edit(Position_technique $position_technique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePosition_techniqueRequest  $request
     * @param  \App\Models\Position_technique  $position_technique
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePosition_techniqueRequest $request, Position_technique $position_technique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Position_technique  $position_technique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position_technique $position_technique)
    {
        //
    }
}
