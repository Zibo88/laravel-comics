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

            <section>
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
            </section>
            
            <section class="exposure">
                <div class="container-exposure flex">

                    {{-- colonna sx--}}
                    <div class="col-left">
                       <h2 class="title">Talent</h2>
                       <div class="participation">
                            <div class="artist flex">
                                <div class="label">
                                    Art by:
                                </div>
                                {{-- dato che gli artisti sono a loro volta un array, eseguo un ciclo foreach del singolo elemento però riferendomi solo all'array artist. --}}
                                <div class="artists-name">
                                    <a href="#">
                                        @foreach($single['artists'] as $artist)
                                        {{$artist}}@if(!$loop->last),@endif
                                    @endforeach
                                    </a>
                                   
                                </div>
                                
                            </div>
                       </div>
                    </div>

                    {{-- colonna dx --}}
                    <div class="col-right">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque impedit repellat totam ea aut quidem consectetur repellendus fuga voluptates natus. Eligendi pariatur corrupti itaque earum consectetur esse sed? Est, incidunt!
                    </div>

                </div>
            </section>


           
           
        @endforeach
    </div>
  
@endsection



