<?php

namespace App\Http\Controllers;

use App\Http\Requests\ORDStoreRequest;
use App\Models\ORDCompetition;
use Illuminate\Http\Request;

class ORDCompetitionController extends Controller
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
    public function store(ORDStoreRequest $request)
    {
        try {
            $ord = ORDCompetition::create([
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
            'data' => $ord
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ORDCompetition  $oRDCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(ORDCompetition $oRDCompetition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ORDCompetition  $oRDCompetition
     * @return \Illuminate\Http\Response
     */
    public function edit(ORDCompetition $oRDCompetition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ORDCompetition  $oRDCompetition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ORDCompetition $oRDCompetition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ORDCompetition  $oRDCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(ORDCompetition $oRDCompetition)
    {
        //
    }
}
