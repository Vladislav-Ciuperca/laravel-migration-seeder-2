@extends('layouts.app')

@section('content')
    <h1>Dati da "config/daawsedta.php": {{ $store['home'] }}</h1>
    <p>This is my paragraph content.</p>

    @foreach ($trains as $singleTrain)
    <p>{{$singleTrain ["id"]}}</p>
    <div>ciao</div>
@endforeach

@endsection
