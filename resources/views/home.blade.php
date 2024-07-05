@extends('layouts.app')

@section('content')
    <h1>Dati da "config/daawsedta.php": {{ $store['home'] }}</h1>
    <p>This is my paragraph content.</p>

    @foreach ($trains as $singleTrain)
    <p>{{$singleTrain ["id"]}}</p>

    <div>
        <span>{{$singleTrain ["azienda"]}}</span>
        <span>stazione_partenza: {{$singleTrain ["stazione_partenza"]}}</span>
        <span>stazione_arrivo: {{$singleTrain ["stazione_arrivo"]}}</span>
        <span>{{$singleTrain ["ora_partenza"]}}</span>
        <span>{{$singleTrain ["ora_arrivo"]}}</span>
        <span>{{$singleTrain ["codice_treno"]}}</span>
        <span>{{$singleTrain ["numero_carrozze"]}}</span>
        <span>{{$singleTrain ["in_orario"]}}</span>
    </div>
@endforeach

@endsection
