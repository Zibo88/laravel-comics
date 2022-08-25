
{{-- estendo il layout alle varie pagine --}}
@extends('layout.app')

{{-- richiamo il segnaposto del titolo della pagina --}}
@section('page_title')
    Home
@endsection

{{-- richiamo il segnaposto e inserisco il codice che dovrà contenere --}}
@section('main_content')

    {{-- immagine del jambotron --}}
    <div class="jambotron">
        <img class="jambotron-img" src="{{asset('img/jumbotron.jpg')}}" alt="jumbotron-img">
    </div>
    <div class="comics-container">
        <div class="container flex">
            {{-- CARD --}}
            {{-- analizzo l'array inserito nei data in route home --}}
           
            @foreach ($comics_array as $comics)
            {{-- permette di selezionare, al click, il fumetto scelto che comparirà nella pagina poster/id --}}
            <a class="route-link" href="{{route ('poster',[
                'id' => $comics['id']
                ])}}">
             <div class="card">
                 <img class="card-img" src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
                 <div class="card-title">{{$comics['title']}}</div>
             </div>
            </a>
           @endforeach
       
           
        </div>

        {{-- CURRENT SERIES --}}
        <div class='current-series'>
            CURRENT SERIES
        </div>

        {{-- LOAD MORE BUTTON --}}
        <div class="comics-container-button">
            <button class="loading">
                <a href="#">LOAD MORE</a> 
            </button>
        </div>
    </div>

    {{-- SECTION BUY --}}
    <div class="section-buy">
        <div class="container">
            <ul class="section-buy-list flex">
                {{-- prima immagine --}}
                <li class="section-buy-item flex">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="digital-comics-img">
                    <a class="section-buy-text" href="#">DIGITAL COMICS</a>
                </li>
                {{-- seconda immagine --}}
                <li class="section-buy-item flex">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="digital-comics-img">
                    <a class="section-buy-text" href="#">MERCHANDISE</a>
                </li>
                {{-- terza immagine --}}
                <li class="section-buy-item flex">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="digital-comics-img">
                    <a class="section-buy-text" href="#">LOCATOR</a>
                </li>
                 {{-- quarta immagine --}}
                 <li class="section-buy-item flex">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="digital-comics-img">
                    <a class="section-buy-text" href="#">SUBSCRIPTIONS</a>
                </li>
                 {{-- quinta immagine --}}
                 <li class="section-buy-item flex">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="digital-comics-img">
                    <a class="section-buy-text" href="#">VISA</a>
                </li>
            </ul>
        </div>
    </div>
    
@endsection



