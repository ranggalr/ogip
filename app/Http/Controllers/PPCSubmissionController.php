<?php

namespace App\Http\Controllers;

use App\Http\Requests\PPCStoreRequest;
use App\Http\Requests\PPCSubmissionStoreRequest;
use App\Models\PPCSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PPCSubmissionController extends Controller
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
    public function store(PPCSubmissionStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            if($request->file('fullPaper')->isValid() && $request->file('poster')->isValid() && $request->file('powerPoint')->isValid())
            {
                $fullPaper = $request->fullPaper->store('ppc-submission/' . $request->teamName);
                $poster = $request->poster->store('ppc-submission/' . $request->teamName);
                $powerPoint = $request->powerPoint->store('ppc-submission/' . $request->teamName);
                $ppc = PPCSubmission::create([
                    'team_name' => $request->teamName,
                    'university' => $request->university,
                    'full_paper' => $fullPaper,
                    'poster' => $poster,
                    'powerpoint' => $powerPoint,
                ]);
                DB::commit();
            }
            else
            {
                $ppc = json_encode([
                    'status' => 'error',
                    'msg' => 'Please check all uploaded file correctly!'
                ]);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ]);
        }
        return $ppc;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PPCSubmission  $pPCSubmission
     * @return \Illuminate\Http\Response
     */
    public function show(PPCSubmission $pPCSubmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PPCSubmission  $pPCSubmission
     * @return \Illuminate\Http\Response
     */
    public function edit(PPCSubmission $pPCSubmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PPCSubmission  $pPCSubmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PPCSubmission $pPCSubmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PPCSubmission  $pPCSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(PPCSubmission $pPCSubmission)
    {
        //
    }
}
