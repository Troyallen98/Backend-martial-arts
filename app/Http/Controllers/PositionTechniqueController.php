<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePosition_techniqueRequest;
use App\Http\Requests\UpdatePositionTechniqueRequest;
use App\Models\PositionTechnique;


class PositionTechniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PositionTechnique::all();
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
    public function store(PositionTechnique $position_technique)
    {
        $position_technique = new PositionTechnique();
        $position_technique->position_id = $request->position()->id;
        $position_technique->technique_id = $request->technique()->id;
        $position_technique->inverse_tech_id = $request->inverse_tech()->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PositionTechnique  $position_technique
     * @return \Illuminate\Http\Response
     */
    public function show(PositionTechnique $position_technique)
    {
        $position_technique = PositionTechnique::all();
        $position_technique = $position_technique->find($request->position_id()->id);
        return $position_technique;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PositionTechnique  $position_technique
     * @return \Illuminate\Http\Response
     */
    public function edit(PositionTechnique $position_technique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePositionTechniqueRequest  $request
     * @param  \App\Models\PositionTechnique  $position_technique
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePositionTechniqueRequest $request, PositionTechnique $position_technique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PositionTechnique  $position_technique
     * @return \Illuminate\Http\Response
     */
    public function destroy(PositionTechnique $position_technique)
    {
        //
    }
}
