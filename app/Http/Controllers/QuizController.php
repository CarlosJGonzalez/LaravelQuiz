<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

class QuizController extends Controller
{


    public function questions($id)
    {
        return Question::All()->where('quiz_id', $id);
    }

    public function index()
    {
        $quizzes = Quiz::all();
        return $quizzes;
    }

    public function show(Quiz $quiz)
    {
        return $quiz;
    }
}
