@extends('layouts.base')

@section('contents')
<div class="card-container d-flex justify-content-center py-5">
  <div class="card p-2">
    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <p>{{$comic->description}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$comic->price}}</li>
      <li class="list-group-item">{{$comic->type}}</li>
      <li class="list-group-item">{{$comic->series}}</li>
      <li class="list-group-item">In Vendita dal: {{$comic->sale_date}}</li>
    </ul>
  </div>
</div>

<div class="d-flex justify-content-center">
  <button type="button" class="btn btn-primary my-2"><a href="/comics" class="text-center text-white">Torna indietro ai fumetti</a></button>
</div>

@endsection