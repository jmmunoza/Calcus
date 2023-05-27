<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\AverageBar;

class DashboardController extends Controller
{
    public function index()
    {

        $averagechart = new AverageBar();
        $averagechart->labels(['3457', '1298', '6787', '3476']);
        $averagechart->dataset('Promedio de perdidas por curso', 'line', [3, 7, 1, 11]);
        //$averagechart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
        //$averagechart->dataset('aaaa', 'line', [1,1,1,1]);

        $averagechart2 = new AverageBar();
        $averagechart2->labels(['1', '2', '3', '4']);
        $averagechart2->dataset('Promedio de intento', 'line', [10, 3, 4, 1]);
        //$averagechart2->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
        //$averagechart2->dataset('aaaa', 'line', [1,1,1,1]);

        $averagechart3 = new AverageBar();
        $averagechart3->labels(['Parcial 1', 'Parcial 2', 'Parcial 3', 'Parcial 4']);
        $averagechart3->dataset('Top parciales perdidos', 'line', [20, 15, 7, 18]);
        //$averagechart3->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
        //$averagechart3->dataset('aaaa', 'line', [1,1,1,1]);

        $data = [
            'averagechart' => $averagechart,
            'averagechart2' => $averagechart2,
            'averagechart3' => $averagechart3
        ];

        return view('admin.dashboard')->with('data', $data);
    }
}
