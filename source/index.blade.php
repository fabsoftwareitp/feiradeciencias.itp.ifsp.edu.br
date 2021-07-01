@extends('_layouts.main')

@section('body')
<div class="destaque container">
    <img src="/assets/images/logo_principal.svg" alt="logo da II Mostra e Feira de Ciências">
</div>

<!--O EVENTO-->
<section class="secao bg-white">
    <div class="container">
        <p class="secao__titulo pos-topo-esquerda">O evento</p>
        <div class="secao__conteudo">
            <img class="secao__imagem-direita" src="/assets/images/montagem.png" alt="Fotos da edição anterior da feira">
            <p class="secao__texto">A <strong>II MOSTRA CIENTÍFICA E FEIRA DE CIÊNCIAS DO IFSP ITAPETININGA</strong> é um evento idealizado e realizado pelas Coordenadoria de Pesquisa, Inovação e Pós-Graduação, Diretoria Adjunta Educacional e Coordenadoria de Extensão do Câmpus Itapetininga do IFSP.</p>

            <a href="/regulamento">Saiba mais detalhes sobre a feira!</a>
        </div>
        <div class="clear"></div>
    </div>
</section>

 <!--DATAS IMPORTANTES-->
 <div id="DT_importante">
    <div class="container">
        <p id="titulo_DT" class="titulo_principal"><strong>Datas importantes</strong></p>
            <div class="datas_importantes sub_header">
                <img src="/assets/images/logo_cientistas.png" alt="logo cientistas" id="logo_cientistas">
                <ul>
                    <li>04/10 a 22/10 - <small>Exposição e visitação da feira virtual</small></li>
                    <li>27/9 a 21/10 às 17h - <small>Período de votação nos melhores trabalhos na categoria "Voto Popular"</small></li>
                    <li>19/10 - <small>Apresentação e arguição dos melhores trabalhos</small></li>
                    <li>20/10 - <small>Apresentação e arguição dos melhores trabalhos</small></li>
                    <li>21/10 Manhã - <small>II Congresso Paulista de Ensino de Ciências</small></li>
                    <li>21/10 Tarde - <small>apresentação e arguição dos melhores trabalhos</small></li>
                    <li>21/10 Tarde - <small>Premiação!</small></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--COMISSÃO ORGANIZADORA-->
<div id="comissao">
    <div class="container">
        <p id="titulo_comissao" class="titulo_principal"><strong>Comissão Organizadora</strong></p>
        <div class="display_flex sub_header">
            <div>
                <ul class="texto p">
                    <li>Alessandra Luzia Da Roz</li>
                    <li>Alexandre Shigunov Neto</li>
                    <li>Carlos Henrique da Silva Santos</li>
                    <li>Carolina Mandarini Dias</li>
                    <li>Danilo Camargo Bueno</li>
                    <li>Marcos Antonino Callegari</li>                              
                </ul>
            </div>
            <img src="/assets/images/logo_pessoas2.png" alt="logo pessoas" id="logo_pessoas">                
        </div>
    </div>
</div>

<!--PROGRAMAÇÃO-->
<div id="programacao" style="display: none;">
    <p id="titulo_programacao"><strong>Programação</strong></p>
    <div>

    </div>
</div>
<div id="transmissao">
    <div class="container">
        <p id="titulo_transmissao"><strong>Transmissão</strong></p>
        <div class="">
            <img src="/assets/images/logo_youtube.png" alt="logo youtube" id="logo_youtube" class="youtube_img">
            <p class="texto youtube_text">Esse ano a Feira acontecerá online, sendo transmitido pelo canal do grupo de Informática do Instituto Federal de Educação, Ciência e Tecnologia de São Paulo Câmpus Itapetininga</p>

            <a href="https://www.youtube.com/channel/UCEMUJSUnnvmrRQoD28-iGbQ" target="_blank" class="btn btn-danger mt-3">Ir para o canal!</a>
        </div>

    </div>
</div>
<div id="inscricoes" style="display: none;">
    <div class="container">
        <p id="titulo_inscricoes"><strong>Inscrições</strong></p>
        <div class="display_flex">
            <img src="/assets/images/logo_pessoas.png" alt="logo pessoas" id="logo_pessoas">
            <div>
                <p id="texto_inscricoes">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fermentum tincidunt felis nec porta. Mauris a fermentum risus. Pellentesque diam risus, bibendum id aliquam at, efficitur a elit. Integer eget porttitor eros. Vivamus vitae
                    consequat nibh.</p>
                <div id="botao_inscricoes"><a href="" class="tirar_sublinhado">Inscreva-se</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
