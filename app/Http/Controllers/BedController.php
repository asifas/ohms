<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use App\Models\BedCategory;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class BedController extends Controller
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
        $bc = BedCategory::all(['id', 'name','bed_floor_id']);
        $b = Bed::with(['bed_category.floors'])->latest()->get();
        return view('back-end.bed', compact(['bc', 'b']));
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
        $request->validate([
            'bed_category_id' => 'required',
            'name' => 'required',
            'des' => 'required',
        ]);

        $data = [
            'bed_category_id' => $request->bed_category_id,
            'name' => $request->name,
            'des' => $request->des,
        ];

        try {
//            return $data;
            Bed::create($data);
            return redirect()->route('b.index');
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Bed $bed
     * @return \Illuminate\Http\Response
     */
    public function show(Bed $bed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Bed $bed
     * @return \Illuminate\Http\Response
     */
    public function edit(Bed $bed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Bed $bed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bed $bed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Bed $bed
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bed::findOrFail($id)->delete();

        return redirect()->route('b.index');
    }
}
