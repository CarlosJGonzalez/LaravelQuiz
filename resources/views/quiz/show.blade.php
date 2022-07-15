@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/quizzes" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($quiz->name) }}</h1>
                <p>{!! $quiz->description !!}</p> 
                <hr>
                <p>This Quiz has <b>{{$count}}</b> questions</p>
                <a href="/quiz/{{ $quiz->id }}/start" class="btn btn-outline-primary">Start the Quiz</a>
                <br><br>
            </div>
        </div>
    </div>
@endsection
