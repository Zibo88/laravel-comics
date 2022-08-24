{{-- estendo il layout alle varie pagine --}}
@extends('layout.app')

{{-- richiamo il segnaposto del titolo della pagina --}}
@section('page_title')
    Home
@endsection

{{-- richiamo il segnaposto e inserisco il codice che dovrà contenere --}}
@section('main_content')

    <div class="jambotron">
        <img class="jambotron-img" src="{{asset('img/jumbotron.jpg')}}" alt="jumbotron-img">
    </div>

    <div class="comics-container">
        <div class="container flex">
            @foreach ($comics_array as $comics)
                <div class="card">
                    <img class="card-img" src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
                    <div class="card-title">{{$comics['title']}}</div>
                </div>
              @endforeach
        </div>

        <div class='current-series'>
            CURRENT SERIES
        </div>

        <div class="comics-container-button">
            <button class="loading">
                <a href="#">LOAD MORE</a> 
            </button>
        </div>
    </div>

    

   
   
@endsection



