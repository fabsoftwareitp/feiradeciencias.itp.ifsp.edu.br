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

        <!-- Cabecalho -->
        <header class="header">
        <div class="header__logo">
                <a href="/"><img src="/assets/images/logo_ifsp.png" alt="IFSP Itapetininga"></a>
            </div>

            <!--Menu mobile-->
            <nav class="header__nav">

            <nav class="menu_mobile">
    <input type="checkbox" id="menu__checkbox" class="menu__checkbox">
    <label for="menu__checkbox" class="menu__toggle">
      <svg class="barras_menu" viewBox="0 0 448 512"  title="bars">
        <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 
        160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 
        0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" />
      </svg>
      <svg class="fechar_menu" viewBox="0 0 384 512" title="times">
        <path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 
        89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 
        0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 
        12.28-32.19 0-44.48L242.72 256z" />
      </svg>
    </label>  
    
    <div class="topico_menu">
                    <p class="none_menu"><a class="espacamento_menu" href="/programacao">Programação</a></p>
                    <p class="none_menu"><a href="/inscricoes">Inscrições de trabalhos</a></p>
                    <p class="none_menu"><a href="/feira_virtual">Feira Virtual</a></p>
                    <p class="none_menu"><a href="#">Edições Anteriores</a></p>
                    <p class="none_menu"><a href="/modelos">Modelos</a></p>
                    <p class="none_menu"><a href="/congresso">Congresso</a></p>
                    <p class="none_menu"><a href="/curso_metodologia">Cursos</a></p>
                </div>
    </nav>
            </nav>
        </header>


        <!-- CONTEUDO PRINCIPAL -->
        @yield('body')

        <!-- RODAPE -->
        <footer class="rodape">
            <h6 class="rodape__titulo">Apoio e Realização:</h6>
            <div class="rodape__conteudo">
                <img src="/assets/images/logo_ifsp.png" alt="IFSP Itapetininga">
                <img src="/assets/images/logo_cnpq.png" alt="CNPQ">
                <a href="https://ic.itp.ifsp.edu.br/fabsoftware/" target="_blank">
                    <img src="/assets/images/logo_fabsoftware.png" alt="Fábrica de Software Acadêmica">
                </a>
            </div>
        </footer>

    </body>
</html>
