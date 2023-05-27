<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\AverageBar;

class DashboardController extends Controller
{
    public function index()
    {

        $averagechart = new AverageBar();
        $averagechart->labels(['Curso 1', 'Curso 2', 'Curso 3', 'Curso 4']);
        $averagechart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $averagechart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
        $averagechart->dataset('aaaa', 'line', [1,1,1,1]);

        $averagechart2 = new AverageBar();
        $averagechart2->labels(['Curso 1', 'Curso 2', 'Curso 3', 'Curso 4']);
        $averagechart2->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $averagechart2->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
        $averagechart2->dataset('aaaa', 'line', [1,1,1,1]);

        $averagechart3 = new AverageBar();
        $averagechart3->labels(['Curso 1', 'Curso 2', 'Curso 3', 'Curso 4']);
        $averagechart3->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $averagechart3->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
        $averagechart3->dataset('aaaa', 'line', [1,1,1,1]);

        $data = [
            'averagechart' => $averagechart,
            'averagechart2' => $averagechart2,
            'averagechart3' => $averagechart3
        ];

        return view('admin.dashboard')->with('data', $data);
    }
}
