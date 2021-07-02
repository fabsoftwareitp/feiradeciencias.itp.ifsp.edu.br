<!DOCTYPE html>
<html lang="{{ $page->language ?? 'pt-br' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap-reboot.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body>

        <div class="header">
            <div class="header__logo">
                <a href="/"><img src="/assets/images/logo_ifsp.png" alt="IFSP Itapetininga"></a>
            </div>
            <nav class="header__nav">
                <ul>
                    <li><a href="/programacao">Programação</a></li>
                    <li><a href="/inscricoes">Inscrições de trabalhos</a></li>
                    <li><a href="/feira_virtual">Feira Virtual</a></li>
                    <li><a href="#">Edições Anteriores</a></li>
                    <li><a href="/modelos">Modelos</a></li>
                    <li><a href="/congresso">Congresso</a></li>
                </ul>
            </nav>
        </div>

        @yield('body')
    </body>
</html>
