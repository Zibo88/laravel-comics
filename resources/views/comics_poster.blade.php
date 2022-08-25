{{-- estendo il layout alle varie pagine --}}
@extends('layout.app')

{{-- richiamo il segnaposto del titolo della pagina --}}
@section('page_title')
    Comics
@endsection

{{-- richiamo il segnaposto e inserisco il codice che dovrà contenere --}}
@section('main_content')
    <div class="single">
        {{-- analizzo l'array trasferito tramite l'array associativo $data nelle route,  --}}
        <div class="blu-line">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore at esse blanditiis totam amet aspernatur, maiores quis id repellat natus voluptatum quasi eligendi ipsum quae excepturi exercitationem cum voluptate? Voluptates?
        </div>
    </div>


    <div class="container">
        {{-- per ogni elemento all'interno dell'array, $single sarà il nome di ogni singolo elemento  --}}
        @foreach ($current_comics as $single)
            <div class="single-img">
                <img src="{{$single['thumb']}}" alt="{{$single['title']}}">
            </div>  

            <div class="container-info flex">
                <div class="single-comics-info">
                    <h1>{{$single['title']}}</h1>
                    <div class="info-shop flex">
                        <div class="container-price-status flex">
                            {{-- PRICE --}}
                            <div class="price">
                                <span>U.S. Price:</span>
                                <span>{{$single['price']}}</span>
                            </div>
                           
                            {{-- STATUS --}}
                            <div class="status">
                                AVAILABLE
                            </div>
                        </div>

                        <div class="check-availability">
                                <a href="#">
                                    Check Availability  <i class="fa-solid fa-caret-down"></i>
                                </a>
                        </div>
                       
                    </div>
                   
                    <p class="description">
                        {{$single['description']}}
                    </p>
                    
                </div>

                <div class="advertiment">
                   ADVERTISIMENT
                    <img src="{{asset('img/adv.jpg')}}" alt="advertisiment-img">
                </div>
            </div>
           
        @endforeach
    </div>
  
@endsection



