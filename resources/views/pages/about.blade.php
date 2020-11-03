@extends('app' , ['title' =>'Abouts Us | ' . config('app.name') ])

@section('content')

    <img src="{{ asset('img/salih.jpg') }}" alt="Mamadou Salih" class="my-12 rounded-full shadow-md">


    <h2 class="mb-5 text-gray-700">
        Construit par <span class="text-pink-500">&hearts;</span>  par Mamadou Saliou Bah
    </h2>

    <p>
        <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page  d'accueil </a>
    </p>

@endsection
