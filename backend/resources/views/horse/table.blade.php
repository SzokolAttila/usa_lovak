@php 
/** 
* @var Illuminate\Support\Collection $horses
*/
@endphp
@extends("layouts.main")

@section("title", $title)

@section("content")
    <h1 class="text-center my-3">
        {{$title}}
    </h1>
    <main class="container">
        <table id="tablazat" class="table table-striped">
            <thead>
                <tr>
                    <th>Állam</th>
                    <th>Fajta</th>
                    <th>Leírás</th>
                    <th>Év</th>
                </tr>
            </thead>
            <tbody>
                @foreach($horses as $horse)
                    <tr>
                        <td>{{$horse["allam"]}}</td>
                        <td>{{$horse["fajta"]}}</td>
                        <td>{{$horse["leiras"]}}</td>
                        <td>{{$horse["ev"]}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection