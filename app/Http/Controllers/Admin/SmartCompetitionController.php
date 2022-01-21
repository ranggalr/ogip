<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SmartCompetition;
use Illuminate\Http\Request;

class SmartCompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smartCompetitions = SmartCompetition::get();
        return view('admin.smart', compact('smartCompetitions'));
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
     * @param  \App\Models\SmartCompetition  $smartCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(SmartCompetition $smartCompetition)
    {
        return view('admin.smart-view', compact('smartCompetition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SmartCompetition  $smartCompetition
     * @return \Illuminate\Http\Response
     */
    public function edit(SmartCompetition $smartCompetition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SmartCompetition  $smartCompetition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SmartCompetition $smartCompetition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SmartCompetition  $smartCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(SmartCompetition $smartCompetition)
    {
        //
    }
}
