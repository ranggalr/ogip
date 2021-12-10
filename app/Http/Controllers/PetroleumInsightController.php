<?php

namespace App\Http\Controllers;

use App\Http\Requests\PIStoreRequest;
use App\Mail\PIRegistered;
use App\Models\PetroleumInsight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PetroleumInsightController extends Controller
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
    public function store(PIStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $pi = PetroleumInsight::create($request->validated());
            Mail::to($request->email)->send(new PIRegistered($pi));
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
            'data' => $pi
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetroleumInsight  $petroleumInsight
     * @return \Illuminate\Http\Response
     */
    public function show(PetroleumInsight $petroleumInsight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetroleumInsight  $petroleumInsight
     * @return \Illuminate\Http\Response
     */
    public function edit(PetroleumInsight $petroleumInsight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PetroleumInsight  $petroleumInsight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PetroleumInsight $petroleumInsight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetroleumInsight  $petroleumInsight
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetroleumInsight $petroleumInsight)
    {
        //
    }
}
