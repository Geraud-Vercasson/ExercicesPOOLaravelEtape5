@extends('main')
@section('title')
    Détails : {{$boisson->name}}
@endsection
@section('content')
    <ul class="list-group">
        <li class="list-group-item"> ID : {{$boisson->id}}</li>
        <li class="list-group-item">Name : {{$boisson->name}}</li>
        <li class="list-group-item">Price : {{$boisson->price}}</li>
    </ul>
    <a href="/" class="btn btn-primary"> Retour</a>
@endsection