<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\OutPatient;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
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

    public function index()
    {
        $appointments = Appointment::with(['out_patients','doctors.department'])->get();
        return view('back-end.appointment_list', compact('appointments'));

    }

    public function store(Request $request)
    {
//        return $request->all();
        $appoint = Appointment::create([
            'out_patient_id' => $request->out_patient_id,
            'doctor_id' => $request->doctor_id,
            'appointment_date' => $request->date,
            'appointment_slot' => $request->slot,
        ]);

        return redirect()->route('appointment.list');
    }

    public function list()
    {
        return view('back-end.appointment_list');
    }

    public function form()
    {
        $doctors = Doctor::all(['id', 'name']);
        $out_patient = OutPatient::latest('id')->get();
        return view('back-end.appointment', compact('doctors', 'out_patient'));
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->route('appointment.list');
    }
}
