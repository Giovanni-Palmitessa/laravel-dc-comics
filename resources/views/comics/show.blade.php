@extends('layouts.base')

@section('contents')
<div class="card">
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
@endsection