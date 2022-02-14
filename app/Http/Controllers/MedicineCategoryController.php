<?php

namespace App\Http\Controllers;

use App\Models\MedicineCategory;
use Illuminate\Http\Request;

class MedicineCategoryController extends Controller
{


    public function index()
    {
        $mc = MedicineCategory::all();
        return view('back-end.medicine.category.index', compact('mc'));
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
        try {
            MedicineCategory::create($request->all());
            return redirect()->back()->with('success', 'Medicine Category Created Successfully');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineCategory $medicineCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineCategory $medicineCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicineCategory $medicineCategory)
    {
        //
    }


    public function destroy($id)
    {
        try {
            MedicineCategory::find($id)->delete();
            return redirect()->back()->with('success', 'Medicine Category Deleted Successfully');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
