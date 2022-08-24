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


    
    <div class="container"> 
        {{-- HEADER TOP --}}
        <div class="header-top">
            <div class="header-text">
                <span>dc power visa</span> 
                <span>additional dc site</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
        {{-- HEADER BOTTOM --}}
        <div class="header-bottom">
             {{-- aggiungo immagine all'header --}}
            <div>
                <img class="logo" src="{{asset('img/dc-logo.png')}}" alt="dc-logo">
            </div>

            <div>
                @foreach ($data as $link)
                    {{$link['name']}}
                @endforeach
            </div>

        </div>
       
    </div>

    <div>
        
    </div>
</header>