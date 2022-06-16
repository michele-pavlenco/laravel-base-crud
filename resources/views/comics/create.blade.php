@extends('layouts.default')
@section('pageTitle', 'Crea fumetto')


@section('mainContent')
    <h1>Crea nuovo fumetto</h1>

            <div>
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div >
                        <label for="title">Title</label>
                        <div>
                            <input type="text" id="title" placeholder="Inserisci un titolo" name="title">
                        </div>

                        <div>
                            <label for="description">Description</label>
                            <textarea name="description" type="text" cols="50" rows="10" id="description" placeholder="Inserisci un titolo">
                        </textarea>
                        </div>


                        <div>
                            <label for="type">Select type: </label>
                            <select type="select" id="type" name="type">
                                <option value="comic book">Comic Book</option>
                                <option value="graphic novel">Graphic Novel</option>
                            </select>

                        </div>

                        <div>
                            <label for="thumb">Image: </label>
                            <input type="text" id="thumb" name="thumb">
                        </div>
                          <div>
                            <label for="price">Price: </label>
                            <input type="text"id="price" name="price">
                        </div>
                           <div>
                            <label for="sale_date">Sale_Date: </label>
                            <input type="text"id="sale_date" name="sale_date">
                        </div>
                    </div>
                    <button><strong>Save</strong></button>
                </form>
            </div>
@endsection