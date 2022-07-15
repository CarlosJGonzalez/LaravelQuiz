@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/quiz/{{ $quiz['id'] }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($quiz['name']) }}</h1>
                <p>{!! $quiz['description'] !!}</p> 
                <hr>
                <br><br>
                <form id="frm" class="" action="{{route('quiz.save')}}" method="POST">
                    <input type="hidden" name="quizid" value="{{$quiz['id']}}">
                    @csrf
                    <ol>
                        @foreach( $questions as $question )
                            <li>
                                <div class="question m-1 p-1 bold">{{{ $question->question }}}</div>
                                @if(count($question->options))
                                    @include('quiz.partial',['options' => $question->options])
                                @endif
                            </li>
                        @endforeach
                    </ol>
                    <button class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
