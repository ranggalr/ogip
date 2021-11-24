<?php

namespace App\Http\Controllers;

use App\Http\Requests\PPCStoreRequest;
use App\Models\PaperPoster;
use Illuminate\Http\Request;

class PaperPosterController extends Controller
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
    public function store(PPCStoreRequest $request)
    {
        try {
            $paperPoster = PaperPoster::create([
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
            'data' => $paperPoster
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaperPoster  $paperPoster
     * @return \Illuminate\Http\Response
     */
    public function show(PaperPoster $paperPoster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaperPoster  $paperPoster
     * @return \Illuminate\Http\Response
     */
    public function edit(PaperPoster $paperPoster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaperPoster  $paperPoster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaperPoster $paperPoster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaperPoster  $paperPoster
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaperPoster $paperPoster)
    {
        //
    }
}
