@extends('layouts.default')

@section('pageTitle', 'Comic')

@section('mainContent')

        <div>
            <div>
                <a href="{{ route('comics.edit', $comic->id) }}">
                    <button>Modifica</button>
                </a>
            </div>
            <div>
                <form action='{{ route('comics.destroy', $comic->id) }}' method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </div>
        </div>
        <div>
            <div style="width: 500px;">
                <img src="{{ $comic->thumb }}" alt="...">
                <div >
                    <h5>{{ $comic->title }}</h5>
                    <p>{{ $comic->description }}</p>
                </div>
                <ul>
                    <li >Prezzo: {{ $comic->price }}</li>
                    <li >Uscita: {{ $comic->sale_date }}</li>
                    <li >Tipo: {{ $comic->type }}</li>
                </ul>
            </div>
        </div>
@endsection