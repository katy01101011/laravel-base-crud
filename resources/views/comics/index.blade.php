@extends('layouts.app')

@section('title_section')
    List
@endsection

@section('main_section')
    <div class="comix_index">
        <div class="container">
            <ul>
                @foreach ($comics as $comic)
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        <li class="card">
                            <div class="card__thumb">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="card__text">
                                <h2>{{ $comic['title'] }}</h2>
                                <p>{{ $comic['series'] }}</p>
                                <small>€{{ $comic['price'] }}</small>
                            </div>
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
