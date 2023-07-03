@extends('layouts.base')

@section('contents')
    <div class="card-container">
        <div class="jumbotron"></div>
            <div class="container">

              @if (session('delete_success'))
              @php $comic = session('delete_success')@endphp
                <div class="alert alert-danger">
                  Il fumetto "{{$comic->title}}" è stato eliminato.
                    <form action="{{route('comics.restore', ['comic' => $comic->id])}}" method="POST">
                      @csrf
                      <button class="btn btn-warning">Ripristina</button>
                    </form>
                </div>
              @endif

              @if (session('restore_success'))
              @php $comic = session('restore_success')@endphp
                <div class="alert alert-success">
                  Il fumetto "{{$comic->title}}" è stato ripristinato.
                </div>
              @endif

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

                        <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger">Elimina</button>
                        </form>
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