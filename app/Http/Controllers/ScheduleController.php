<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    function index($id) {
        $data = [];

        $exam = Exam::where('id', '=', $id)->first();
        $data['exam'] = $exam;
        return view('user.schedule')->with('data', $data);
    }

    function success(Request $request) {
        dd("??");
        return back()->withSuccess("VAMOOOO");
    }
}
