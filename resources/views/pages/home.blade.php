@extends('app', ['title' => config('app.name') ])
@section('content')
    <p>
        <img src="/img/download.png" alt="La Guinée" >
    </p>
    <h1>Hello from Conakry !</h1>

    <p>Il est actuellement {{ date('H:i'). ' min' }} </p>

@endsection
    