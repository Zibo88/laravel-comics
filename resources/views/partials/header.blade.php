{{-- struttura dati per i link dell'header --}}
@php

    $data = [

    [
        'name' => 'CHARACTHERS',
        'link' => '#'

    ],
    [
        'name' => 'COMICS',
        'link' => '#'

    ],
    [
        'name' => 'MOVIES',
        'link' => '#'

    ],
    [
        'name' => 'TV',
        'link' => '#'

    ],
    [
        'name' => 'GAMES',
        'link' => '#'

    ],
    [
        'name' => 'COLLETIBLES',
        'link' => '#'

    ],

    [
        'name' => 'VIDEO',
        'link' => '#'

    ],
    [
        'name' => 'FANS',
        'link' => '#'

    ],
    [
        'name' => 'NEWS',
        'link' => '#'

    ],
    [
        'name' => 'SHOP',
        'link' => '#'

    ],

    ]
@endphp
{{-- porzione di codice relativo all'header --}}
<header>
   
        {{-- HEADER TOP --}}
        <div class="header-top">
            <div class="container">
                <div class="header-text">
                    <span>dc power visa</span> 
                    <span>additional dc site</span>
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
           
        </div>
        {{-- HEADER BOTTOM --}}
        <div class="header-bottom">
             <div class="container flex">
                 {{-- IMG --}}
                <div class="header-logo">
                    <img class="logo" src="{{asset('img/dc-logo.png')}}" alt="dc-logo">
                </div>
                {{-- LINK --}}
                <div class="menu-container">
                    <ul class="flex">
                        {{-- creo un ciclo foreach per scorrere i dati dall'array --}}
                        <li class="link">
                            @foreach ($data as $link)
                            {{-- stampo i dati --}}
                            <a href="">{{$link['name']}}</a> 
                        @endforeach
                        </li>
                        <i id="shop-chevron" class="fa-solid fa-caret-down"></i>
                    </ul>
                </div>
                {{-- SEARCH BARR --}}
                <div class="search-barr">
                    <input type="text" placeholder="Search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
             </div>
        </div>
       
         {{-- immagine del jambotron --}}
    <div class="jambotron">
        <img class="jambotron-img" src="{{asset('img/jumbotron.jpg')}}" alt="jumbotron-img">
    </div>
   

    <div>
        
    </div>
</header>