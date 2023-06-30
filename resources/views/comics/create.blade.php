@extends('layouts.base')

@section('contents')
    <form method="POST" action="{{route('comics.store')}}">
        @csrf

        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" 
                   class="form-control @error('title') is-invalid @enderror" 
                   id="titolo" 
                   placeholder="Inserisci titolo" 
                   name="title"
                   value="{{ old('title') }}"
                >
            <div class="invalid-feedback">
                @error('title') {{ $message }} @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <input type="text" 
                   class="form-control @error('description') is-invalid @enderror" 
                   id="descrizione" 
                   placeholder="Inserisci descrizione" 
                   name="description"
                   value="{{ old('description') }}"
                >
            <div class="invalid-feedback">
                 @error('description') {{ $message }} @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="url-image" class="form-label">URL Immagine</label>
            <input type="text" 
                   class="form-control @error('thumb') is-invalid @enderror" 
                   id="url-image" 
                   placeholder="Inserisci l'URL dell'immagine" 
                   name="thumb"
                   value="{{ old('thumb') }}"
                >
            <div class="invalid-feedback">
                @error('thumb') {{ $message }} @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="prezzo" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="prezzo" placeholder="Inserisci prezzo"name="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" placeholder="Inserisci Serie" name="series">
        </div>
        <div class="mb-3">
            <label for="data-di-vendita" class="form-label">Data di vendita</label>
            <input type="text" class="form-control" id="data-di-vendita" placeholder="Inserisci data di vendita" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" placeholder="Inserisci tipo" name="type">
        </div>

        <button class="btn btn-primary">Salva</button>
    </form>
@endsection