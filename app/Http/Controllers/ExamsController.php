<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function index()
    {
        $data = [];
        $exams = [
            'id' => 1,
            'inscription_date' => '2021-05-05',
            'parcial' => 1,
            'retry' => 1,
            'status' => 'done',
            'done_workshop' => false,
            'done_class' => false,
        ];
        
        $data['exams'] = [$exams, $exams, $exams];

        return view('user.exams')->with('data', $data);
    }
}
