@extends('app', ['title' => 'Hello City '])
@section('content')
    <h1>Hello from Conakry !</h1>

    <p>Il est actuellement {{ date('H:i'). ' min' }} </p>

@endsection
    