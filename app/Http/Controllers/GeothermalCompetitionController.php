<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeothermalStoreRequest;
use App\Mail\CompetitionRegistered;
use App\Models\GeothermalCompetition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class GeothermalCompetitionController extends Controller
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
    public function store(GeothermalStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $geothermal = GeothermalCompetition::create([
                'team_name' => $request->teamName,
                'gdrive' => $request->gdrive,
                'members' => $request->members,
            ]);
            Mail::to($request->members[0]['email'])->send(new CompetitionRegistered);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => 'success',
            'data' => $geothermal
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeothermalCompetition  $geothermalCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(GeothermalCompetition $geothermalCompetition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeothermalCompetition  $geothermalCompetition
     * @return \Illuminate\Http\Response
     */
    public function edit(GeothermalCompetition $geothermalCompetition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeothermalCompetition  $geothermalCompetition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeothermalCompetition $geothermalCompetition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeothermalCompetition  $geothermalCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeothermalCompetition $geothermalCompetition)
    {
        //
    }
}
