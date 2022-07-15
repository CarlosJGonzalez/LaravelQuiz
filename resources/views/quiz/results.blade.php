@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 pt-2">
            {{$user[0]->name}} {{$quiz[0]->name}} 
        </div>
        <ol>
        @foreach( $questions as $index => $question)
            <li>
                <div class="qustion m-1 p-1">{{{ $question[0]->question }}}</div>
                @if( count($question[0]->options) > 0)
                <ol>
                    @foreach($question[0]->options as $opt)
                        <li>{{$opt->option}}({{$opt->id}})</li>
                    @endforeach
                </ol>
                @endif

            </li>
        @endforeach
        </ol>
    </div>
@endsection