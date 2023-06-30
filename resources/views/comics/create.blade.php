@extends('layouts.base')

@section('contents')
    <form method="POST" action="{{route('comics.store')}}">
        @csrf
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="titolo" placeholder="Inserisci titolo">
        </div>
        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="descrizione" placeholder="Inserisci descrizione">
        </div>
        <div class="mb-3">
            <label for="url-image" class="form-label">URL Immagine</label>
            <input type="text" class="form-control" id="url-image" placeholder="Inserisci l'URL dell'immagine">
        </div>
        <div class="mb-3">
            <label for="prezzo" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="prezzo" placeholder="Inserisci prezzo">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" placeholder="Inserisci Serie    ">
        </div>
        <div class="mb-3">
            <label for="data-di-vendita" class="form-label">Data di vendita</label>
            <input type="text" class="form-control" id="data-di-vendita" placeholder="Inserisci data di vendita">
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" placeholder="Inserisci tipo">
        </div>

        <button class="btn btn-primary">Salva</button>
    </form>
@endsection