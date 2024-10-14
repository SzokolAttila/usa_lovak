@php
/** 
* @var Illuminate\Support\Collection $horses
*/
@endphp
@extends("layouts.main")

@section("title", $title)

@section("content")
    <h1 class="my-3 text-center">
        {{$title}}
    </h1>    
    <main class="container row mx-auto g-3">
        @foreach($horses as $horse)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="bg-light h-100 p-3">
                    <h5 class="text-center">
                        {{$horse["fajta"]}}
                    </h5>
                    <p class="text-center">
                        {{$horse["allam"]}} ({{$horse["ev"]}})
                    </p>
                    <img class="img-fluid thumbnail my-2" src="{{asset("img/" . $horse["kep"])}}" alt="">
                    <p class="text-center">
                        {{$horse["leiras"]}}
                    </p>
                </div>
            </div>
        @endforeach
    </main>
@endsection
