<?php

namespace App\Http\Controllers;

use App\Models\BedCategory;
use App\Models\BedFloor;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class BedCategoryController extends Controller
{
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
        $floor = BedFloor::latest('id')->get(['id', 'name']);
        $bc=  BedCategory::with('floors')->latest('id')->paginate('5');
        return view('back-end.bed_category', compact(['floor','bc']));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
//        $request->validate([
//            'bed_flood_id' => 'required',
//            'name' => 'required',
//            'des' => 'required',
//        ]);

        $data = [
            'bed_floor_id' => $request->bed_floor_id,
            'name' => $request->name,
            'des' => $request->des,
        ];

        try {
//            return $data;
            BedCategory::create($data);
            return redirect()->route('bc.index');
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\BedCategory $bedCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BedCategory $bedCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\BedCategory $bedCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BedCategory $bedCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BedCategory $bedCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BedCategory $bedCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\BedCategory $bedCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        BedCategory::find($id)->delete();
        return redirect()->back();
    }
}
