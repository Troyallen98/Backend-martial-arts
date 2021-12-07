<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTechniqueRequest;
use Illuminate\Http\Request;

use App\Http\Requests\UpdateTechniqueRequest;
use App\Models\Technique;
use App\Models\PositionTechnique;

class TechniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Technique::all();
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
    public function store(Request $request)
    {
        {
            // Validate the request...
            $technique = new Technique;
            $technique->name = $request->name;
            $technique->video_url = $request->video_url;
            $technique->user_id = $request->user()->id;
            $technique->save();

            // create position technique
            $pos_tech = new PositionTechnique;
            $pos_tech->technique_id = $technique->id;
            $pos_tech->position_id = $request->position;
            // if technique id is null then you dont want to use this code
            if ($request->technique_id !== null) {
                $pos_tech->inverse_tech_id = $request->technique_id;
                $pos_tech->save();
                $item = $technique->load('position');
            }
            return $item;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function show(Technique $technique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function edit(Technique $technique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTechniqueRequest  $request
     * @param  \App\Models\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTechniqueRequest $request, Technique $technique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technique $technique)
    {
        //
    }
}
