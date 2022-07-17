@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="alert alert-primary row" role="alert">
            <div class="col-8">
                <h4 class="alert-heading">Well done!</h4>
                <p>Aww yeah, you successfully completed this quiz.</p>
            </div>
            <div class="col-4">
                Your score is:
                <h1>{{$score}}%</h1>
            </div>
            <hr>
        </div>
        <div class="col-12 pt-2">
            <div class="card">
                <div class="card-body">
                    {{$user[0]->name}}
                </div>
            </div>           
        </div>
        <div class="col-12 pt-2">
            <div class="card">
                <div class="card-body">
                    {{$quiz[0]->name}} : {{$quiz[0]->description}}
                </div>
            </div> 
        </div>        
        <ol>
        @foreach( $questions as $index => $q)
            <li>
                <div class="qustion m-1 p-1">{{{ $q['question'] }}}</div>
                @if( count($q['response']) > 0)
                <ul>
                    @if($q["response"]["value"] == 0 )
                    <li class="alert alert-danger">{{$q["response"]["option"]}}</li>
                    @else
                    <li class="alert alert-success">{{$q["response"]["option"]}}</li>
                    @endif
                </ul>
                @endif
            </li>
        @endforeach
        </ol>
    </div>
    <footer class="container">
        <div class="container">
            <div class="row" style="text-align: right;">
                <a class="text-right mb-2 p-2" href="../quiz/{{ $quiz[0]->id }}">I want to do this Quiz again!</a>
            </div>
            
        </div>        
    </footer>
@endsection
