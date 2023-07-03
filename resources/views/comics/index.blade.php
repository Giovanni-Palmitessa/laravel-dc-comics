@extends('layouts.base')

@section('contents')
    <div class="card-container">
        <div class="jumbotron"></div>
            <div class="container">
              <div class="main-content">
                <button type="button" class="btn btn-primary mt-4"><a href="{{route('comics.create')}}" class="text-center text-white">Inserisci Nuovo fumetto</a></button>
                <div class="comics mb-3">
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
                        <a href="{{route('comics.edit', ['comic' => $comic->id])}}" class="card-link">Modifica</a>
                        <a href="#" class="card-link">Elimina</a>
                      </div>
                  </div>
                  @endforeach
                    
                </div>
                <div class="learn-more">
                  <span class="button">LOAD MORE</span>
                </div>
              </div>
            </div>
    </div>
@endsection