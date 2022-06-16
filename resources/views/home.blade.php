@extends('layouts.default')

@section('pageTitle', 'Fumetti - Home')
    <main></main>
@section('mainContent')
<h2 class="text-center">Lista fumetti</h2>
</main>
{{-- @foreach ($comics as $comic)
<div class="card">
    <div class="img">
            <a href="{{route('comics.edit', $comic->id)}}">
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
@endforeach --}}

</main>
@endsection