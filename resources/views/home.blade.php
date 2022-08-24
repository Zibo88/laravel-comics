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
        <div class="container">
            <div class="card">
              @foreach ($comics_array as $comics)
                  {{$comics['title']}}
              @endforeach
            </div>
        </div>
    </div>
   
@endsection



