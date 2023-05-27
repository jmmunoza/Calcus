<?php

namespace App\Http\Controllers;
use App\Models\Calendar;
use App\Models\Exam;

class TestController extends Controller
{
    public function index(): void
    {
        $x = now();
        $z = Exam::create(['inscription_date' => $x, 'parcial' => 1, 'retry' => 1, 'status' => 'failed', 'done_workshop' => true, 'done_class' => true]);
        
        $calendar = Calendar::make(['presentation_date' => $x]);
        $calendar->setExam($z.getId());
        $calendar->save();
        dd($calendar);
    }
}