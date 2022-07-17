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
    public function index($id)
    {
        $result = Result::where('id', $id)->get()->toArray();
        if( !$result ){
            return view('404');
        }
        
        $subset = array_merge(...array_values($result));

        $quiz = Quiz::where('id', $subset['quiz_id'])->get();
        $user = User::where('id', $subset['user_id'])->get();

        $rawQuestions = json_decode( $subset['options'], true );
        $totalResponses=0;
        $score = 0;
        $goodResponses = 0;
        foreach($rawQuestions as $index => $opt )
        {
            $q = Question::where('id', $index)->get();
            $responses  = QuizzesOption::where('id', $opt)->get();

                $temp = json_decode($q, true);
                $q = array_merge(...array_values($temp));

                $resArr = json_decode($responses,true);
                    $q['response'] = array_merge(...array_values($resArr));
                
                ($q['response']['value'] == 1) ? $goodResponses++ : null;
                $totalResponses++;
            $questions[$index] = $q;
        }
        $score = number_format(100*$goodResponses/$totalResponses, 1);

        return view('quiz.results')
            ->with('quiz', $quiz)
            ->with('user', $user)
            ->with('questions', $questions)
            ->with('score', $score);
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
        $id = Result::create([
            'user_id' => $request->user,
            'quiz_id' => $request->quizid,
            'options' => json_encode( $request->opt ),
        ])->id;

        return redirect("/results/${id}");
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
