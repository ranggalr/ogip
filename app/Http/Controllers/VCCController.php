<?php

namespace App\Http\Controllers;

use App\Http\Requests\VCCStoreRequest;
use App\Mail\VCCRegistered;
use App\Models\VCC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class VCCController extends Controller
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
    public function store(VCCStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $vcc = VCC::create($request->validated());
            Mail::to($request->email)->send(new VCCRegistered($vcc));
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
            'data' => $vcc
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VCC  $vCC
     * @return \Illuminate\Http\Response
     */
    public function show(VCC $vCC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VCC  $vCC
     * @return \Illuminate\Http\Response
     */
    public function edit(VCC $vCC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VCC  $vCC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VCC $vCC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VCC  $vCC
     * @return \Illuminate\Http\Response
     */
    public function destroy(VCC $vCC)
    {
        //
    }
}
