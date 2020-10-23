<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Us | Hello City</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>
    <body >

       <p>Construit par &hearts; par Mamadou Saliou Bah</p>

       <p><a href="{{ route('home') }}">Revenir à la page  d'accueil </a></p>

        <footer>
            <p>&copy; Copyright {{ date('Y') }} &middot; <a href="{{ route('about') }}">A propos</a></p>
        </footer>
        
    </body>
</html>
