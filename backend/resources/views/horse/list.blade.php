@php
/**
* @var Illuminate\Support\Collection $horses
*/
@endphp
@extends("layouts.main")

@section("title", $title)

@section("content")
    <main class="container">
        <h1 class="my-3">
            {{$title}}
        </h1>
        <ul id="lista">
            @foreach($horses as $horse)
                <li @if($loop->first) {{'id="elso"'}} @endif @if($loop->last) {{'id="utolso"'}} @endif>{{$horse["fajta"]}} ({{$horse["allam"]}} - {{$horse["ev"]}})</li>
            @endforeach
        </ul>
    </main>
@endsection