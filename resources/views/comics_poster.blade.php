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

            {{-- BUY --}}
            <section class="buy">
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
        @endforeach

        
    </div>

     {{-- EXPOSURE --}}
    
     <section class="exposure">

        {{-- container della tabella --}}
        <div class="container-exposure flex">

            {{-- colonna sx--}}
            <div class="col-left">
               <h2 class="title">Talent</h2>
               <div class="participation">
                   {{-- ARTISTI --}}
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

                    {{-- Sceneggiatori --}}
                    <div class="writers flex">
                        <div class="label">
                            Written by:
                        </div>

                        <div class="writers-name">
                            <a href="#">
                                @foreach($single['writers'] as $writer)
                                    {{$writer}}@if(!$loop->last),@endif
                                @endforeach
                            </a>
                        </div>

                    </div>
               </div>
            </div>

            {{-- colonna dx --}}
            <div class="col-right">
                <h2 class="title"> Speces </h2>

                <div class="series flex">
                   <div class="label">
                        Series
                   </div>
                   <div class="series-name">
                       <a href="#">
                            {{$single['series']}}
                       </a>   
                   </div>
                </div>

                <div class="speces-to-buy flex">
                    <div class="label">
                        U.S. Price:
                   </div>

                   <div class="speces-price">
                            {{$single['price']}}
                    </div>
                </div>

                <div class="speces-to-buy flex">
                    <div class="label">
                        On Sale Date:
                   </div>

                   <div class="speces-price">
                            {{ $single['sale_date']}}   
                    </div>
                </div>
            </div>
        </div>

        <div class="exposure-commodity">
            <div class="commodity-list-container">
                <ul class="commodity-list flex">
                    <li class="commodity-item">
                        <a class="commodity-link flex" href="#">
                            <div class="commodity-link-text" >
                                Digital Comics
                            </div>

                            <img class="commodity-img" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="digital-comics-img">
                        </a>
                    </li>

                    <li class="commodity-item">
                        <a class="commodity-link flex" href="#">
                            <div class="commodity-link-text">
                                Merchandise
                            </div>

                            <img class="commodity-img" src="{{asset('img/buy-comics-merchandise.png')}}" alt="merchandise-img">
                        </a>
                    </li>

                    <li class="commodity-item">
                        <a class="commodity-link flex" href="#">
                            <div class="commodity-link-text">
                               Shop
                            </div>

                            <img class="commodity-img" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="shop-img">
                        </a>
                    </li>

                    <li class="commodity-item">
                        <a class="commodity-link flex" href="#">
                            <div class="commodity-link-text">
                                Subscriptions
                            </div>

                            <img class="commodity-img" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="subscriptions-img">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

   
  
  
@endsection



