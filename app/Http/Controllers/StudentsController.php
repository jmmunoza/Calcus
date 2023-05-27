<?php

namespace App\Http\Controllers;
use App\Models\Student;

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
}   
