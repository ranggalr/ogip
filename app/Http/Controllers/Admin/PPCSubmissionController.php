<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PPCSubmission;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class PPCSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppc = PPCSubmission::get();
        return view('admin.ppc-submission', compact('ppc'));
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
        //
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

    public function download(PPCSubmission $ppc)
    {
        $zip      = new ZipArchive();
        $fileName = 'attachment.zip';
        $zip->open(storage_path('app/ppc-submission/' . $ppc->team_name . '/' . $fileName), ZipArchive::CREATE | ZipArchive::OVERWRITE);
        $zip->addFile(Storage::path($ppc->full_paper), basename($ppc->full_paper));
        $zip->addFile(Storage::path($ppc->poster), basename($ppc->poster));
        $zip->addFile(Storage::path($ppc->powerpoint), basename($ppc->powerpoint));
        $zip->close();
        return response()->download(storage_path('app/ppc-submission/' . $ppc->team_name . '/' . $fileName));
    }
}
