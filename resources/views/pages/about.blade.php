@extends('app' , ['title' =>'Abouts Us | ' .config('app.name') ])

@section('content')
    <p>
        <img src="/img/salih.jpg" alt="Mamadou Salih" >
    </p>

    <p>Construit par &hearts; par Mamadou Saliou Bah</p>

    <p><a href="{{ route('home') }}">Revenir à la page  d'accueil </a></p>

@endsection
