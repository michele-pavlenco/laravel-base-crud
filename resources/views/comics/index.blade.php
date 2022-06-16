


@extends('layouts.default')

@section('pageTitle', 'All Comics')
@section('mainContent')
    <section>


        <h1>Comics</h1>
        <table>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>

                        <td>
                            <h6>{{ $comic->title }}</h6><br>
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <button>Visualizza</button>
                            </a>
                            <a href="{{ route('comics.edit', $comic->id) }}">
                                <button>Modifica</button>
                            </a>
                            <form action='{{ route('comics.destroy', $comic->id) }}' method="POST">
                                @csrf
                                @method('DELETE')
                                <button id="button" type="submit">Elimina</button>
                            </form>
                        </td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }} €</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                    </tr>
                @endforeach

                </tr>
            </tbody>
        </table>
    </section>
@endsection