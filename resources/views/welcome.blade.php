@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p></p>
                <br>
                <a href="/quizzes" class="btn btn-outline-primary">Show Quizzes</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h3 class="display-one mt-5">Carlos Gonzalez Software Engineer</h3>
                <p></p>
                <br>
            </div>
        </div>
    </div>
@endsection