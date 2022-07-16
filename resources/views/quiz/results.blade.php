@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 pt-2">
            {{$user[0]->name}}
        </div>
        <div class="col-12 pt-2">
            {{$quiz[0]->name}} : {{$quiz[0]->description}}
        </div>        
        <ol>
        @foreach( $questions as $index => $q)
            <li>
                <div class="qustion m-1 p-1">{{{ $q['question'] }}}</div>
                @if( count($q['response']) > 0)
                <ul>
                    @if($q["response"]["value"] == 0 )
                    <li class="alert alert-warning">{{$q["response"]["option"]}}</li>
                    @else
                    <li class="alert alert-success">{{$q["response"]["option"]}}</li>
                    @endif
                </ul>
                @endif
            </li>
        @endforeach
        </ol>
    </div>
@endsection