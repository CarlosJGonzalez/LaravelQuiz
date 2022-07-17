@extends('layouts.app')
@section('content')
<div class="container text-center">
    <h3>{{$message}}</h3>
    <img width="50%" src="{{asset('assets/images/error-500.webp')}}" alt="">
</div>
    
@endsection