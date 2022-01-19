<?php

namespace App\Http\Controllers;

use App\Models\CEOTalk;
use Illuminate\Http\Request;

class CEOTalkController extends Controller
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
    public function store(Request $request)
    {
        DB\::beginTransaction();
        try {
            $ceo = CEOTalk::create($request->validated());
            // Mail::to($request->email)->send(new PIRegistered($pi));
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
            'data' => $ceo
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CEOTalk  $cEOTalk
     * @return \Illuminate\Http\Response
     */
    public function show(CEOTalk $cEOTalk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CEOTalk  $cEOTalk
     * @return \Illuminate\Http\Response
     */
    public function edit(CEOTalk $cEOTalk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CEOTalk  $cEOTalk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CEOTalk $cEOTalk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CEOTalk  $cEOTalk
     * @return \Illuminate\Http\Response
     */
    public function destroy(CEOTalk $cEOTalk)
    {
        //
    }
}
