<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mini Post</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>

<body class="">
    <div class="row justify-content-lg-between bg-dark">
        <div class="col-md-2">
            <h1 class="text-white m-2 p-1"> Mini Post</h1>
        </div>
        <div class="col-md-8">
            <ul class="nav justify-content-end fs-3 ">

                @if (Route::has('login'))

                @auth <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary m-2">Dashboard</a>
                </li>
                @else<li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-primary m-3">Log in</a>
                </li>
                @if (Route::has('register'))<li class="nav-item">
                    <a href="{{ route('register') }}" class="btn btn-primary m-3">Register</a>
                    @endif
                </li>
                @endauth

                @endif
            </ul>
        </div>
    </div>


    <div class="row justify-content-center mt-3">
        @foreach ($key as $data )
         <div class="col-md-8">
            <h1 class="fs-3"> {{$data->title}}</h1>
            <p> {{$data->description}}</p>

        </div>
        @endforeach
    </div>

</body>

</html>