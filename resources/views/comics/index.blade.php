@extends('layouts.base')

@section('contents')
    <div class="card-container">
      <a href="{{route('comics.create')}}">Inserisci Nuovo fumetto</a>

        @foreach ($comics as $comic)
        <div class="card">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$comic->price}}</li>
              <li class="list-group-item">{{$comic->type}}</li>
            </ul>
            <div class="card-body">
              <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link">Informazioni</a>
              <a href="#" class="card-link">Modifica</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection