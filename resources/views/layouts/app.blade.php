<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Citations_ECF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    @include('layouts.navbar')

    @auth
        <div class="container my-3">
            <h3> Welcome,<strong class="text-primary"> {{ Auth::user()->name }} </strong></h3>
        </div>

        <div class="container py-5">
            @yield('body')
        </div>
    @else
        <div class="container p-3 m-5 text-info">
            <h2 class="my-5 text-center"> Welcome, Guest </h2>
            <p class="m-5"> If you want to read more information about the authors and citations, please login or register a new
                account.</p>
        </div>
    @endauth

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
