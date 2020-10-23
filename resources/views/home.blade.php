<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>
    <body >

        <h1>Hello from Conakry !</h1>

        <p>Il est actuellement {{ date('h:m A') }} .</p>

        <footer>
            <p>&copy; Copyright {{ date('Y') }} &middot; <a href="#">A propos</a></p>
        </footer>
        
    </body>
</html>
