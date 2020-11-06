@extends('layouts.app', ['title' => config('app.name') ])
@section('content')

    <img src="{{ asset('img/download.png') }}" alt="La Guinée" class=" mt-12 rounded shadow-md h-30">


    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Conakry !</h1>

    <p class="text-lg text-gray-800">Il est actuellement {{ date('H : i'). ' min' }} </p>

@endsection
