@extends('layouts.default')

@section('pageTitle', 'Fumetti - Home')
    <main></main>
@section('mainContent')
<h2>Lista fumetti</h2>
@foreach ($comics as $comic)
<div class="card">
    <div class="img">
        <a href="">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </a>
        <h3>{{$comic->title}}</h3>
    </div>
    <div class="card-content">
        <p>{{$comic->description}}</p>
        <p>{{$comic->series}}</p>
        <p class="price">{{$comic->price}}</p>
        <p>{{$comic->sale_date}}</p>
        <p>{{$comic->type}}</p>
    </div>
</div>
@endforeach
</main>
@endsection