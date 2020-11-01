@extends('app' , ['title' =>'Abouts Us | ' .config('app.name') ])

@section('content')

    <p>Construit par &hearts; par Mamadou Saliou Bah</p>

    <p><a href="{{ route('home') }}">Revenir à la page  d'accueil </a></p>

@endsection
