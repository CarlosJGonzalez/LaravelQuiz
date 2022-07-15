<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizzesOption;
use App\Models\User;

class QuizController extends Controller
{

    public function getOptions($id)
    {
        return QuizzesOption::where('question_id', $id)->get();
    }

    public function getQuestions($id)
    {
        return Question::where('quiz_id', $id)->get();
    }

    public function index()
    {
        $quizzes = Quiz::all();
        return view('quiz.index', [
            'quizzes' => $quizzes,
        ]);
    }

    public function show(Quiz $quiz)
    {
        /*********************************
         * How many question the quiz have
         */
        $count = $quiz::with('questions')->get();
        $count = count($count[0]['questions']);
        return view('quiz.show', [
            'quiz' => $quiz,
            'count' => $count,
            'users' => $users,
        ]);
    }

    public function start($id)
    {
        /*
        /************************************
         * Get the quiz
         */
        $quiz = Quiz::where('id', $id)->get();

        /******************************************
         * Get the questions
         */
        $questions = Question::with('options')->get();

        return view('quiz.start')
            ->with('quiz', $quiz[0])
            ->with('questions',$questions);
    }

    public function store(Request $request)
    {

        return view('quiz.results');
    }
}
