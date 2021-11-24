<?php

namespace App\Http\Controllers;

use App\Http\Requests\SCStoreRequest;
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SCStoreRequest $request)
    {
        try {
            $smartCompetition = SmartCompetition::create([
                'team_name' => $request->teamName,
                'members' => $request->members,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => 'success',
            'data' => $smartCompetition
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SmartCompetition  $smartCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(SmartCompetition $smartCompetition)
    {
        //
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
