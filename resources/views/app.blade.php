<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? config('app.name') }}</title>
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen ">

       <main role="main" class="flex flex-col justify-center items-center">
            @yield('content')
       </main>


        <footer>
            <p class="text-gray-400">
                &copy; Copyright {{ date('Y') }}

                @if(!Route::is('about'))
                    &middot; <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-600 underline">A propos</a>
                @endif
            </p>
        </footer>


    </body>
</html>
