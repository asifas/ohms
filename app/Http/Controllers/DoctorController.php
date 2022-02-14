<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
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
        $doc = Doctor::with(['department'])->latest()->paginate('11');
        return view('back-end.doctor_list', compact('doc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $dept = Department::latest('id')->get();
        return view('back-end.doctor', compact('dept'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        return $request;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'img' => 'required',
            'degree' => 'required',
            'department_id' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $file_ext = $request->file('img')->getClientOriginalExtension();
            $path = "imgs/";
            $name = 'doc_' . time() . '.' . $file_ext;
            $img = $request->file('img')->move($path, $name);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'img' => $img,
            'degree' => $request->degree,
            'department_id' => $request->department_id,
        ];

        try {
            Doctor::create($data);
            return redirect()->route('doctor.list');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::findOrFail($id)->delete();

        return redirect()->route('doctor.list');
    }
}
