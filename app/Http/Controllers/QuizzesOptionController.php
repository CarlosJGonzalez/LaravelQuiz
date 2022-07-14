<?php

namespace App\Http\Controllers;

use App\Models\QuizzesOption;
use Illuminate\Http\Request;

class QuizzesOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $id )
    {
        $option = QuizzesOption::All()->where('question_id', $id);
        return $option;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizOption  $quizOption
     * @return \Illuminate\Http\Response
     */
    public function show(QuizzesOption $quizOption)
    {
        return $quizOption;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizOption  $quizOption
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizOption $quizOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuizOption  $quizOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuizOption $quizOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizOption  $quizOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizOption $quizOption)
    {
        //
    }
}
