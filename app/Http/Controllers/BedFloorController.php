<?php

namespace App\Http\Controllers;

use App\Models\BedFloor;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class BedFloorController extends Controller
{
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
        $bed_floor = BedFloor::latest('id')->paginate('5');
        return view('back-end.floor.floor', compact('bed_floor'));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'des' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'des' => $request->des,
        ];

        try {
            BedFloor::create($data);
            return redirect()->route('bed.floor');
        } catch (Exception $ex) {
            return $ex->getMessage();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\BedFloor $bedFloor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return BedFloor::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\BedFloor $bedFloor
     * @return \Illuminate\Http\Response
     */
    public function edit(BedFloor $bedFloor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BedFloor $bedFloor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BedFloor $bedFloor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\BedFloor $bedFloor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
         BedFloor::find($id)->delete();

         return redirect()->back();
    }
}
