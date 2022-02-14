<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\InPatient;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ip = InPatient::latest()->get();
        $donor =  Donor::with('Inpatient')->latest()->get();
        return view('back-end.blood.donor', compact('ip','donor'));
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


    public function store(Request $request)
    {
        // insert request data into database
        try {
            Donor::create($request->all());
            return redirect()->back()->with('success', 'Donor Added Successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
//            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        //
    }


    public function destroy($id)
    {
        try {
            Donor::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Donor Deleted Successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
