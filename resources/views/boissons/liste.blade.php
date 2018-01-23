@extends('main')
@section('title', 'liste des boissons')
@section('content')
    <ul class="list-group">
        @foreach($boissons as $boisson)
            <li class="list-group-item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3">
                        {{$boisson->name}}
                        </div>
                        <div class="col-sm-3 col-sm-push-8">
                            <a href="/details/{{$boisson->id}}" class="btn btn-primary"> Détails</a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach

    </ul>
@endsection