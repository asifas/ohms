<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use App\Models\Doctor;
use App\Models\InPatient;
use Illuminate\Http\Request;

class InPatientController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $inp = InPatient::with('bed.bed_category.floors','doctor.department')->latest('id')->paginate('11');
        $bed = Bed::with('bed_category.floors')->where('is_booked','=','0')->select('id','name','is_booked','bed_category_id')->get();
        $doc = Doctor::with('department')->select('id','name','department_id')->get();

//        return $in_patient;
        return view('back-end.patient_list',compact('inp','bed','doc'));
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
        try {

            $inp =InPatient::create($request->all());
            if ($inp) {
                Bed::where('id',$inp->bed_id)->update(['is_booked' => 1]);

            }
            return redirect()->back()->with('message','Patient Added Successfully');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InPatient  $inPatient
     * @return \Illuminate\Http\Response
     */
    public function show(InPatient $inPatient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InPatient  $inPatient
     * @return \Illuminate\Http\Response
     */
    public function edit(InPatient $inPatient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InPatient  $inPatient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InPatient $inPatient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InPatient  $inPatient
     * @return \Illuminate\Http\Response
     */
    public function destroy(InPatient $inPatient)
    {
        //
    }
}
