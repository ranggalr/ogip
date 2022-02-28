<?php

namespace App\Http\Controllers;

use App\Http\Requests\PWFStoreRequest;
use App\Mail\PWFRegistered;
use App\Models\PWF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PWFController extends Controller
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
    public function store(PWFStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            if($request->file('paymentProof')->isValid())
            {
                $path = $request->paymentProof->store('pwf');
                $pwf = PWF::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'major' => $request->major,
                    'university' => $request->university,
                    'phone' => $request->phone,
                    'category' => $request->category,
                    'proof' => $path,
                ]);
                Mail::to($request->email)->send(new PWFRegistered($pwf));
                DB::commit();
            }
            else
            {
                $payment = json_encode([
                    'status' => 'error',
                    'msg' => 'Please check your payment proof'
                ]);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => 'success',
            'data' => $pwf
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PWF  $pWF
     * @return \Illuminate\Http\Response
     */
    public function show(PWF $pWF)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PWF  $pWF
     * @return \Illuminate\Http\Response
     */
    public function edit(PWF $pWF)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PWF  $pWF
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PWF $pWF)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PWF  $pWF
     * @return \Illuminate\Http\Response
     */
    public function destroy(PWF $pWF)
    {
        //
    }
}
