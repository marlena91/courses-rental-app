<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body class="bg-gray-100 h-screen antialased loading-none font-sans">
<div id="app">
    <header class="bg-blue-900 py-6 w-10>">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <a href="{{ url('/courses/') }}" class="text-3xl font-semibold text-gray-100 no-underline">
                    CoursesLib
                </a>
            </div>
            <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">Login</a>
                        <a class="no-underline hover:underline" href="{{ route('register-user') }}">Register</a>
                @else
                    <a class="no-underline hover:underline" href="/users/{{ Auth::user()->id }}">
                        {{ Auth::user()->name }}
                    </a>
                    <a class="no-underline hover:underline" href="{{ route('signout') }}">Logout</a>
                @endguest


            </nav>
        </div>

    </header>
</div>
@yield('content')
</body>
</html>

