@extends('layouts.app')
@section('content')
    <div class="container">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p></p>
                <br>
                <a href="/quizzes" class="btn btn-outline-primary">Show Quizzes</a>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col"><canvas id="myChart"></canvas></div>
            <div class="col-3"></div>
            
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
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var xhttp;
        window.onload = (event) => {
            var results = '{!!$data!!}';
            var mydata = JSON.parse( results );
            const labels = mydata.labels;
            
            const data ={
                labels: labels,
                datasets: [{
                    label: 'Quiz Stats',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColors: 'rgb(255, 99, 132)',
                    data: mydata.data
                }]
            };
            const config = {
                type: 'bar',
                data: data,
                options: {}
            };
            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        };
    </script>
@endpush