<?php

namespace App\Http\Controllers;

use App\Models\OutPatient;
use Illuminate\Http\Request;

class OutPatientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
//        return \request()->all();
        $out_patient = OutPatient::latest()->paginate('11');
        return view('back-end.out_patient',compact('out_patient'));
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
//        return $request;

        try {
            OutPatient::create($request->all());
            return redirect()->back()->with('success', 'Out Patient Created Successfully');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OutPatient  $outPatient
     * @return \Illuminate\Http\Response
     */
    public function show(OutPatient $outPatient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OutPatient  $outPatient
     * @return \Illuminate\Http\Response
     */
    public function edit(OutPatient $outPatient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OutPatient  $outPatient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutPatient $outPatient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OutPatient  $outPatient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OutPatient::find($id)->delete();

        return redirect()->back()->with('success', 'Out Patient Deleted Successfully');
    }
}
