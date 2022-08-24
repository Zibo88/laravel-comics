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
             {{-- aggiungo immagine all'header --}}
             <div class="container flex">
                <div class="header-logo">
                    <img class="logo" src="{{asset('img/dc-logo.png')}}" alt="dc-logo">
                </div>
    
                <div class="menu-container">
                    <ul class="flex">
                        <li class="link">
                            @foreach ($data as $link)
                            <a href="">{{$link['name']}}</a> 
                        @endforeach
                        </li>
                        <i id="shop-chevron" class="fa-solid fa-caret-down"></i>
                    </ul>
                 
                </div>
    
                <div class="search-barr">
                    <input type="text" placeholder="Search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
             </div>
        </div>
       
   

    <div>
        
    </div>
</header>