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
        try{
            $quizzes = Quiz::all();
            if(!$quizzes){
                return view('404');
            }
            return view('quiz.index', [
                'quizzes' => $quizzes,
            ]);
        }catch( \Illuminate\Database\QueryException $e )
        {
            return view('500',['message' => 'There is a problem with the database connection.']);
        }catch( \Exception $e )
        {
            return view('500', ['message' => "The site is in maintenance. Please try later."]);
        }
    }

    public function show(Quiz $quiz)
    {
        try{
            /*********************************
             * How many question the quiz have
             */
            $count = $quiz::with('questions')->get();
            $count = count($count[0]['questions']);
            return view('quiz.show', [
                'quiz' => $quiz,
                'count' => $count,
            ]);
        }catch( \Illuminate\Database\QueryException $e )
        {
            return view('500',['message' => 'There is a problem with the database connection.']);
        }catch( \Exception $e )
        {
            return view('500', ['message' => "The site is in maintenance. Please try later."]);
        }
    }

    public function start($id)
    {
        try{
            /*********************************
             * Users
             */
            $users = User::all();

            /************************************
             * Get the quiz
             */
            $quiz = Quiz::where('id', $id)->get();

            /******************************************
             * Get the questions and response options
             */
            $questions = Question::where('quiz_id', $id)->with('options')->get();

            return view('quiz.start')
                ->with('quiz', $quiz[0])
                ->with('questions',$questions)
                ->with('users', $users);
        }catch( \Illuminate\Database\QueryException $e )
        {
            return view('500',['message' => 'There is a problem with the database connection.']);
        }catch( \Exception $e )
        {
            return view('500', ['message' => "The site is in maintenance. Please try later."]);
        }
    }
}
