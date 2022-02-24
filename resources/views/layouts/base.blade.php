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
    <div class="d-flex">
        <header class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Comics Dashboard</span>
            </a>
            <hr>
            <ul class="nav flex-column mb-auto">
                <li>
                    <a href="#" class="nav-link text-white">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        Customers
                    </a>
                </li>
            </ul>
        </header>
        <main>
            @yield('content')
        </main>

        <footer>
            
        </footer>
    </div>

</body>

</html>