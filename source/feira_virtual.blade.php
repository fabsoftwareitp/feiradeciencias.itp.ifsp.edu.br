@extends('_layouts.main')

@section('body')

<section class="secao bg-white">
    <div class="container">
        <h3 class="secao__subtitulo">Apresentação dos trabalhos</h3>
        <div class="secao__conteudo">
            <p>
                Após avaliação, os trabalhos classificados serão apresentados na II Mostra Científica e Feira de Ciências do IFSP Itapetininga Virtual, e estarão disponíveis para visitação entre os dias <strong>04 e 22 de outubro de 2021</strong>, <a href="#feira">aqui</a>.
            </p>
            <p>
                Os melhores trabalhos terão a oportunidade de se apresentarem em sessões de avaliação por videoconferência, que ocorrerão nos dias <strong>19, 20 e 21 de outubro de 2021</strong>, por meio da pelo <a href="https://www.youtube.com/channel/UCEMUJSUnnvmrRQoD28-iGbQ" target="_blank">canal do grupo de Informática</a> do Instituto Federal de Educação, Ciência e Tecnologia de São Paulo Câmpus Itapetininga
            </p>
        </div>
    </div>
</section>

<section class="secao bg-white" id="feira">
    <div class="container">
        <h3 class="secao__subtitulo">Visite nossa feira virtual!</h3>
        <div class="secao__conteudo">
            <p>
            Em formato totalmente online, a II MOSTRA E FEREIA DE CIÊNCIA do IFSP Itapetiniga conta com a apresentação de x trabalhos e a participação de estudantes do ensino fundamental I (E.F.I), ensino fundamental II (E.F.II) e do ensino médio (E.M).
            </p>
            <p>
               Selecione um bloco para visitar:
            </p>
        </div>

        <div class="secao__conteudo" id="blocos">
            
            <object data="/assets/images/blocos.svg"></object>

            <object data="/assets/images/blocos_responsivo.svg"></object>

        </div>
        

    </div>
</section>

@endsection