@extends('layouts.app')

@section('title_section')
    List
@endsection

@section('main_section')
    <div class="comix_index">
        <div class="container">
            <ul>
                @foreach ($comics as $comic)
                    <div class="card_container">
                        <div class="buttons">
                            <a href="">
                                <i class="fas fa-pen-nib"></i>
                            </a>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="fas fa-bomb"></i>
                                </button>
                            </form>
                        </div>
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
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
