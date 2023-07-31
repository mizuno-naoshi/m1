<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(Quiz $quiz)
    {
        return view('comedies.quiz')->with(['quizzes' => $quiz->get() ]);
    }

}
