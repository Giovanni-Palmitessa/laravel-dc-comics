@extends('layouts.base')

@section('contents')
<div class="container">
    <form method="POST" action="{{route('comics.update', ['comic'=> $comic->id])}}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titolo" class="form-label text-white py-2">Titolo</label>
            <input type="text" 
                   class="form-control @error('title') is-invalid @enderror" 
                   id="titolo" 
                   placeholder="Inserisci titolo" 
                   name="title"
                   value="{{ old('title', $comic->title) }}"
                >
            <div class="invalid-feedback">
                @error('title') {{ $message }} @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="descrizione" class="form-label text-white">Descrizione</label>
            <input type="text" 
                   class="form-control @error('description') is-invalid @enderror" 
                   id="descrizione" 
                   placeholder="Inserisci descrizione" 
                   name="description"
                   value="{{ old('description', $comic->description) }}"
                >
            <div class="invalid-feedback">
                 @error('description') {{ $message }} @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="url-image" class="form-label text-white">URL Immagine</label>
            <input type="text" 
                   class="form-control @error('thumb') is-invalid @enderror" 
                   id="url-image" 
                   placeholder="Inserisci l'URL dell'immagine" 
                   name="thumb"
                   value="{{ old('thumb', $comic->thumb) }}"
                >
            <div class="invalid-feedback">
                @error('thumb') {{ $message }} @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="prezzo" class="form-label text-white">Prezzo</label>
            <input type="text" 
                   class="form-control @error('price') is-invalid @enderror" 
                   id="prezzo" 
                   placeholder="Inserisci prezzo nel formato '$ **.**'"
                   name="price"
                   value="{{ old('price', $comic->price) }}"
                >
            <div class="invalid-feedback">
                @error('price') {{ $message }} @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="series" class="form-label text-white">Serie</label>
            <input type="text" 
                   class="form-control @error('series') is-invalid @enderror" 
                   id="series" 
                   placeholder="Inserisci Serie" 
                   name="series"
                   value="{{ old('series', $comic->series) }}"
                >
            <div class="invalid-feedback">
                @error('series') {{ $message }} @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="data-di-vendita" class="form-label text-white">Data di vendita</label>
            <input type="text" 
                   class="form-control @error('sale_date') is-invalid @enderror" 
                   id="data-di-vendita" 
                   placeholder="Inserisci data di vendita nel formato 'YYYY-MM-DD'" 
                   name="sale_date"
                   value="{{ old('sale_date', $comic->sale_date) }}"
                >
            <div class="invalid-feedback">
                @error('sale_date') {{ $message }} @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="tipo" class="form-label text-white">Tipo</label>
            <input type="text" 
                   class="form-control  @error('type') is-invalid @enderror" 
                   id="tipo" 
                   {{-- placeholder="Inserisci tipo"  --}}
                   name="type"
                   value="{{ old('type', $comic->type) }}"
                >
            <div class="invalid-feedback">
                @error('type') {{ $message }} @enderror
            </div>    
        </div>

        <button class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection