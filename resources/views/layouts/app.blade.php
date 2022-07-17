<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito';
            }

            .nodisc{
                list-style-type:none;
            }

            .question{
                background-color: #f3f3f3;
            }

            .nav-bar{
                /* border-bottom: solid 1px; */
                padding: 1.5rem;
                box-shadow: 0 2px 2px #ccc;
                margin-bottom: 1rem;
            }   
            
            .home{
                width: 32px;
            }
        </style>

    </head>

    <body>
    <div class="container nav-bar">
        <a style="text-decoration: none;" href="/"><img id="home" src="{{asset('assets/images/home.png')}}" class="home"></a>
    </div>
    
    @yield('content')
    @stack('scripts');
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>