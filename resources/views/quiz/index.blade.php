@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Take a Quiz!</h1>
                        <p>Enjoy doing a Quiz!</p>
                    </div>
                </div>                
                @forelse($quizzes as $quiz)
                    <ul>
                        <li><a href="./quiz/{{ $quiz->id }}">{{ ucfirst($quiz->name) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Quiz available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection