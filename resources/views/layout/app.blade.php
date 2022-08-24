<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('page_title')</title>
</head>
<body>
    {{-- includo la porzione di codice dell'header --}}
    @include('partials.header')

    {{-- il main sarà una porzione che continuerà a cambiare di pagina in pagina, metto il segnaposto @yield assegnandogli il nome 'main_content' --}}
    <main>
        @yield('main_content')
    </main>
    
     {{-- includo la porzione di codice del footer --}}
    @include('partials.footer')
</body>
</html>