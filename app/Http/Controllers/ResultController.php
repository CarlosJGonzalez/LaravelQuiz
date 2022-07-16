<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use App\Models\SelectedOption;
use App\Models\Quiz;
use App\Models\User;
use App\Models\QuizzesOption;
use App\Models\Question;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Result::create([
            'user_id' => $request->user,
            'quiz_id' => $request->quizid,
            'options' => json_encode( $request->opt ),
        ]);

        $quiz = Quiz::where('id', $request->quizid)->get();
        $user = User::where('id', $request->user)->get();

        $rawQuestions = json_decode( json_encode($request->opt), true );
        foreach($rawQuestions as $index => $opt )
        {
            $q = Question::where('id', $index)->get();
            $responses  = QuizzesOption::where('id', $opt)->get();

                $temp = json_decode($q, true);
                $q = array_merge(...array_values($temp));

                $resArr = json_decode($responses,true);
                    $q['response'] = array_merge(...array_values($resArr));
            $questions[$index] = $q;
        }
        
        return view('quiz.results')
            ->with('quiz', $quiz)
            ->with('user', $user)
            ->with('questions', $questions);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
