<?php

namespace App\Http\Controllers;

use App\Models\Comedy;
use App\Models\Quiz;
use Illuminate\Http\Request;

class ComedyController extends Controller
{
    public function index(Comedy $comedy)
    {
        return view('comedies.index')->with(['comedies' => $comedy->get()]);
    }
    
    public function show(Comedy $comedy)
    {
        return view('comedies.show')->with(['comedy' => $comedy]);
    }
    
    public function quiz(Quiz $quiz)
    {
        return view('comedies.quiz')->with(['quiz' => $quiz]);
    }
}
