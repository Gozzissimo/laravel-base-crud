<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('documentTitle')</title>
</head>

<body>
    <header class="container">
        <div class="row">
            <div class="col-6">
                <h1>Administrator</h1>
            </div>
            <div class="col-6">

            </div>
        </div>
    </header>
    @yield('content')
</body>

</html>