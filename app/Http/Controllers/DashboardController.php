<?php

namespace App\Http\Controllers;

use App\Charts\mainChart;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function failedStudentsPerCourse()
    {   
        $chart = new mainChart;
        $data = Student::groupBy('group_code')->select('group_code', DB::raw('count(*) as total'))->get()->pluck('group_code','total');
        list($keys, $values) = Arr::divide($data);
        $chart->labels($keys);
        $chart->dataset('Failed StudentsPerCourse', 'line', $values);

        return view('sample_view', ['chart' => $chart]);
    }
}
