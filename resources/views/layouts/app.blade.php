<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="flex">
        <div class="w-56 bg-white shadow-lg h-screen flex flex-col justify-between">
            <div class="mt-2 flex justify-center">
                <img src="/tu.png" class="h-32" alt="">

            </div>
            <p class="w-40 h-0.5 bg-sky-600 m-auto overflow-hidden"></p>
            <div class="mt-2 flex-1">
                <nav>
                    <ul class="gap-8">
                        <li>
                            <a href="/dashboard"
                                class="block px-4 py-2 border-l-4 m-2  text-gray-800 hover:border-sky-600 hover:bg-gray-200">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('exam.index')}}"
                                class="block px-4 py-2 border-l-4 m-2 text-gray-800 hover:border-sky-600 hover:bg-gray-200">Exams</a>
                        </li>

                        <li>
                            <a href=" #"
                                class="block px-4 py-2 border-l-4 m-2  text-gray-800 hover:border-sky-600 hover:bg-gray-200">Students</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 border-l-4 m-2  text-gray-800 hover:border-sky-600 hover:bg-gray-200">registration</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 border-l-4 m-2  text-gray-800 hover:border-sky-600 hover:bg-gray-200">User
                                Management</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 border-l-4 m-2  text-gray-800 hover:border-sky-600 hover:bg-gray-200">Logout</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="p-4 flex-1">
            @yield('content')
        </div>
    </div>
</body>

</html>