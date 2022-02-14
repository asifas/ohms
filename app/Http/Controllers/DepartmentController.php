<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
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
        $departments = Department::latest('id')->paginate('11');

        return view('back-end.depart-list', compact('departments'));
    }

    public function show()
    {
        return view('back-end.departments');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'des' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'des' => $request->des,
            'slug' => \Str::slug($request->name, '-')
        ];

        try {
            Department::create($data);
            return redirect()->route('departments');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function destroy($id)
    {
        Department::find($id)->delete();

        return redirect()->route('departments');
    }
}
