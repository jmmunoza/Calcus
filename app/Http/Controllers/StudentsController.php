<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\User;

class StudentsController extends Controller
{
    public function create($request) 
    {   
        Student::validate($request);

        return Student::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'group_code' => $request['group_code'],
            'epik_id' => $request['epik_id']
        ]);

    }

    public function index() 
    {
        $data = [];
        $data['students'] = User::all();
        
        return view('admin.students')->with('data', $data);
    }
}   
