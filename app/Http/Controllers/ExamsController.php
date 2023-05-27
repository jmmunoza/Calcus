<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function index()
    {
    
        $id = 1;
        $data = [];

        $exams = Exam::where('student_id', '=', $id)->get();

        // $exams = [
        //     'id' => 1,
        //     'inscription_date' => '2021-05-05',
        //     'parcial' => 1,
        //     'retry' => 1,
        //     'status' => 'done',
        //     'done_workshop' => false,
        //     'done_class' => false,
        // ];
        
        $data['exams'] = $exams;

        return view('user.exams')->with('data', $data);
    }
}
