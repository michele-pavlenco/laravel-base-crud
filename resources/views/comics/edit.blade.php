@extends('layouts.default')
@section('pageTitle', 'Crea fumetto')


@section('mainContent')
    <h1>Crea nuovo fumetto</h1>

    <div>
        <div>
            <div>

                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label>Title</label>
                        <div>
                            <input type="text" id="title" name="title" value="{{$comic->title}}">
                        </div>

                        <div>
                            <label for="description">Description</label>
                            <textarea name="description" cols="50" rows="10" type="text" ="form-control" id="description" value="{{$comic->description}}">{{$comic->description}}
                        </textarea>
                        </div>

                        <div>
                            <label for="type">Select type: </label>
                            <select type="select" id="type" name="type">
                                <option value="comic book" {{$comic->title == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                                <option value="graphic novel" {{$comic->title == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                            </select>

                        </div>

                        <div>
                            <label for="thumb">Image: </label>
                            <input id="thumb" name="thumb" value="{{$comic->thumb}}">
                        </div>
                          <div >
                            <label for="price">Price: </label>
                            <input type="text" id="price" name="price" value="{{$comic->price}}">
                        </div>
                           <div>
                            <label for="sale_date">Sale_Date: </label>
                            <input type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                        </div>
                    </div>
                    <button>Modifica</button>
                </form>

            </div>
        </div>
    </div>
@endsection
