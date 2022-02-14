<?php

namespace App\Http\Controllers;

use App\Models\User;

class FrontendController extends Controller
{
    public function doctorList()
    {
        $doctors = User::where('is_doctor', 1)->get();
        return view('front-end.index', compact('doctors'));
    }
}
