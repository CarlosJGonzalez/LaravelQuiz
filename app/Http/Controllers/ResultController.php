<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\User;
use App\Models\QuizzesOption;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        try{
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
        }catch( \Illuminate\Database\QueryException $e ){
            return view('500', ['message' => "There is a problem with the database connection."]);
        }catch( \Exception $e ){
            return vie('500', ['message' => "The site is in maintenance. Please try later."]);
        }
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
        try{
            $id = Result::create([
                'user_id' => $request->user,
                'quiz_id' => $request->quizid,
                'options' => json_encode( $request->opt ),
            ])->id;

            if(!$id){
                return view('500');
            }
            return redirect("/results/${id}");
            
        }catch( \Illuminate\Database\QueryException $e ){
            return view('500', ['message' => 'There is a problem with the database connection. Please try later.']);
        }catch( \Exception $e ){
            return view('500', ['message' =>'There site is in maintenance. Please try again later.']);
        }
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

    public function stats()
    {
        try{
            $quizzes = DB::table('results')
                ->select(DB::raw('count(*) as data, name as label'))
                ->join('quizzes', 'quizzes.id', 'quiz_id')
                ->groupBy('quiz_id','name')
                ->get()->toArray();

            if(!$quizzes){
                return view('500');
            }               

            foreach ( $quizzes as $quiz )
            {
                $labels[] = $quiz->label;
                $data[] = $quiz->data;
            }

            $data = json_encode([
                'labels' => $labels,
                'data' => $data
            ]);
            
            return view('welcome',[
                'data' => $data
            ]);
        }catch( \Illumiate\Database\QueryException $e ){
            return view( '500', ['message' => 'There is a problem with the database connection. Please try later.']);
        }catch( \Exception $e ){
            return view('500', ['message' => 'There site is in maintenance. Please try again later.']);
        }
    }
}
