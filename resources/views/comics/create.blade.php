@extends('layouts.app')

@section('title_section')
    Details
@endsection

@section('main_section')
    <div class="comics_create">
        <h2>Crea un nuovo comics!</h2>
        <div class="container">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf

                <label for="title">Titolo</label>
                <input type="text" name="title" id="title">

                <label for="description">Descrizione</label>
                <textarea type="text" name="description" id="description"></textarea>

                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb">

                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price">

                <label for="series">Serie</label>
                <input type="text" name="series" id="series">

                <label for="sale_date" placeholder="Anno-Mese-Giorno">Data</label>
                <input type="text" name="sale_date" id="sale_date">

                <label for="type">Tipo</label>
                <input type="text" name="type" id="type">


                <button type="submit">Crea</button>
            </form>
        </div>
    </div>
@endsection
