<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- includo la porzione di codice dell'header --}}
    @include('partials.header')

    {{-- il sarà una porzione che continuerà a cambiare di pagina in pagina, metto il segnaposto @yield assegnandogli il nome 'main_content' --}}
    <main>
        @yield('main_content')
    </main>
</body>
</html>