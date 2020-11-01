@extends('app', ['title' => config('app.name') ])
@section('content')
    <h1>Hello from Conakry !</h1>

    <p>Il est actuellement {{ date('H:i'). ' min' }} </p>

@endsection
    