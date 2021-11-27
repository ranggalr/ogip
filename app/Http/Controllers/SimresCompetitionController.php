<?php

namespace App\Http\Controllers;

use App\Http\Requests\SimresStoreRequest;
use App\Models\SimresCompetition;
use Illuminate\Http\Request;

class SimresCompetitionController extends Controller
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
    public function store(SimresStoreRequest $request)
    {
        try {
            $simres = SimresCompetition::create([
                'team_name' => $request->teamName,
                'gdrive' => $request->gdrive,
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
            'data' => $simres
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SimresCompetition  $simresCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(SimresCompetition $simresCompetition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SimresCompetition  $simresCompetition
     * @return \Illuminate\Http\Response
     */
    public function edit(SimresCompetition $simresCompetition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SimresCompetition  $simresCompetition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SimresCompetition $simresCompetition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SimresCompetition  $simresCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimresCompetition $simresCompetition)
    {
        //
    }
}
