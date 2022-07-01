@extends('layouts.app')

@section('title_section')
    Details
@endsection

@section('main_section')
    <div class="comics_show">
        <div class="text">
            <h2>{{ $title }}</h2>
            <p>{{ $series }}</p>
            <small>€{{ $price }}</small>
            <p>{{ $description }}</p>
        </div>
        <div class="thumb">
            <img src="{{ $thumb }}" alt="{{ $title }}">
        </div>
    </div>
@endsection