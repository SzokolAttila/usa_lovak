@extends("layouts.main")

@section("title", $title)

@section("content")
    <main class="container">
        <h1 class="my-3">
            {{$title}}
        </h1>
        <ul>
            <li><a href="{{route("horse.list")}}">Felsorolás</a></li>
            <li><a href="{{route("horse.table")}}">Táblázat</a></li>
            <li><a href="{{route("horse.grid")}}">Bootstrap GRID</a></li>
        </ul>
        <p>Forrás: <a href="">Wikipédia</a></p>
    </main>
@endsection