<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calcus</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body class="flex flex-col h-screen bg-gray-200">
    <nav class="bg-gradient-to-r from-blue-900 to-blue-700 w-full z-20 top-0 left-0 border-b border-blue-500">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src={{ asset('images/EAFITLogo.png') }} alt="Logo" class="h-8 mr-2" />
            </a>
            <div class="flex md:order-2 space-x-2">
                @guest
                    <a href={{ route('register') }}
                        class="text-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">Registrarse</a>
                    <a href={{ route('login') }}
                        class="text-blue-900 bg-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">Iniciar
                        sesión</a>
                @endguest

                @auth
                    @if (Auth::user()->role == 'admin')
                        <form>
                            <div class="flex">
                                <label for="location-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">ID de
                                    estudiante</label>

                                <div class="relative w-full">
                                    <input type="search" id=location-search"
                                        class="block p-2.5 rounded-lg w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="ID de estudiante..." required>
                                    <button type="submit"
                                        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-500 rounded-r-lg border border-blue-700 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endif
                    <form action={{ route('logout') }} method="POST">
                        @csrf
                        <button type="submit"
                            class="text-blue-900 bg-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">Cerrar
                            sesión</button>
                    </form>
                @endauth


            </div>
            @auth
                @if (Auth::user()->role == 'user')
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                        <ul
                            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                            <li>
                                <a href={{ route('exams.index') }}
                                    class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0">Supletorios</a>
                            </li>
                        </ul>
                    </div>
                @endif

                @if (Auth::user()->role == 'admin')
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                        <ul
                            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                            <li>
                                <a href="{{ route('admin.students.index') }}"
                                    class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0">Estudiantes</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.dashboard.index') }}"
                                    class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                @endif
            @endauth

        </div>
    </nav>

    <div class="flex-1 overflow-y-auto">
        @yield('content')
    </div>
</body>

</html>
