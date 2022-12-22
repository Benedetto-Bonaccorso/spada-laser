<?php

namespace App\Http\Controllers;

use App\Models\LightSaber;
use App\Http\Requests\StoreLightSaberRequest;
use App\Http\Requests\UpdateLightSaberRequest;
use Termwind\Components\Dd;

class LightSaberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spade = LightSaber::all();
        return view("admin.spade.index", compact("spade"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.spade.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLightSaberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLightSaberRequest $request)
    {
        $newSaber = new LightSaber();
        $newSaber->name = $request["name"];
        $newSaber->image = $request["image"];
        $newSaber->description = $request["description"];
        $newSaber->price = $request["price"];
        $newSaber->save();
        return to_route("sabers.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LightSaber  $lightSaber
     * @return \Illuminate\Http\Response
     */
    public function show(LightSaber $lightSaber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LightSaber  $lightSaber
     * @return \Illuminate\Http\Response
     */
    public function edit(LightSaber $saber)
    {
        return view("admin.spade.edit", compact("saber"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLightSaberRequest  $request
     * @param  \App\Models\LightSaber  $lightSaber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLightSaberRequest $request, LightSaber $lightSaber)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LightSaber  $lightSaber
     * @return \Illuminate\Http\Response
     */
    public function destroy(LightSaber $lightSaber)
    {
        //
    }
}
