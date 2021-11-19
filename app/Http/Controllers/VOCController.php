<?php

namespace App\Http\Controllers;

use App\Http\Requests\VOCStoreRequest;
use App\Models\VOC;
use Illuminate\Http\Request;

class VOCController extends Controller
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
    public function store(VOCStoreRequest $request)
    {
        try {
            $voc = VOC::create($request->validated());
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ]);
        }
        return $voc;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VOC  $vOC
     * @return \Illuminate\Http\Response
     */
    public function show(VOC $vOC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VOC  $vOC
     * @return \Illuminate\Http\Response
     */
    public function edit(VOC $vOC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VOC  $vOC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VOC $vOC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VOC  $vOC
     * @return \Illuminate\Http\Response
     */
    public function destroy(VOC $vOC)
    {
        //
    }
}
