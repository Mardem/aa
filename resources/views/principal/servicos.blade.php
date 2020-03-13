
@extends('layouts.main.main')
@section('content')
    <main class="page-content" id="content">
        <!--           = intro-services           /-->
        <section class="intro-banner intro-bg" style="background-image: url('{{ asset('principal/img/upload/intro/home.jpg') }}')" data-stellar-background-ratio="0.8">
            <div class="intro-banner__inner">
                <h1 class="title" style="color: papayawhip;">Serviços</h1>
            </div>
        </section>
        <!--           end intro-services           /-->
        <!--           = breadcrumbs           /-->
        <div class="breadcrumbs-wrapper" id="breadcrumbs">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.html">Royal Laser</a></li>
                    <li class="active"><span>Serviços</span></li>
                </ol>
            </div>
        </div>
        <!--           end breadcrumbs           /-->
        <!--           ¬ services-panels           /-->
        <div class="services-panels st-row">
            <div class="service-panel service-panel--gray">
                <div class="container-fluid">
                    <div class="row">
                        <div class="service-panel__cover col-xs-12 col-sm-6"><a class="service-panel__link" href="#"><img src="{{ asset('principal/img/upload/services_2/3755.jpg') }}" alt="ABDÔMEN - LINHA ALBA"></a></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="service-panel__card col-xs-12 col-sm-6 pull-right">
                                <div class="service-panel__top">
                                    <h2 class="title">ROSTO – BUÇO  - MENTO (QUEIXO) - FACES LATERAIS</h2><span class="cost"></span>
                                </div>
                                <div class="service-panel__desc">
                                    <p>•	Mulheres geralmente realizam depilação fácil a cada 7 ou 15 dias, com o tratamento a laser a depilação na região do rosto é necessária somente a cada 30 ou 40 dias;</p>
                                    <p>
                                        •	Acredita-se que o tratamento a laser mancha a pele, porém isso é um mito. O que mancha a pele é a exposição solar sem a proteção adequada. Usando filtro solar adequado até mesmo pessoas com predisposição a manchas ficam tranquilamente protegidas após qualquer tipo de depilação;</p>
                                    <p>
                                        •	Temos equipe formada por especialistas treinados com o uso de protocolo exclusivo da marca, para não sofrer intercorrências ao longo do tratamento.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-panel">
                <div class="container-fluid">
                    <div class="row">
                        <div class="service-panel__cover col-xs-12 col-sm-6 pull-right"><a class="service-panel__link" href="#"><img src="{{ asset('principal/img/upload/services_2/5783.jpg') }}" alt="VIRILHA COMPLETA - VIRILHA ÍNTIMA - VIRILHA SIMPLES"></a></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="service-panel__card col-xs-12 col-sm-6">
                                <div class="service-panel__top">
                                    <h2 class="title">ANTEBRAÇOS - BRAÇOS - MÃOS E DEDOS</h2><span class="cost"></span>
                                </div>
                                <div class="service-panel__desc">
                                    <p>Algumas pessoas têm considerável volume de pelos nessa região, incluindo mãos e dedos. Nosso tratamento apresenta grandes resultados na eliminação de pelos desses locais sem nenhuma restrição. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-panel service-panel--gray">
                <div class="container-fluid">
                    <div class="row">
                        <div class="service-panel__cover col-xs-12 col-sm-6"><a class="service-panel__link" href="#"><img src="{{ asset('principal/img/upload/services_2/287.jpg') }}" alt="AXILAS"></a></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="service-panel__card col-xs-12 col-sm-6 pull-right">
                                <div class="service-panel__top">
                                    <h2 class="title">GLÚTEOS – INTERGLÚTEOS – PERIANAL</h2><span class="cost"></span>
                                </div>
                                <div class="service-panel__desc">
                                    <p>Região dos glúteos é uma das mais procuradas para tratamento devido a foliculite (pelos encravados);</p>
                                    <p>
                                        A satisfação dos pacientes nesta área é de 100%;Após tratamento o bumbum apresenta aspecto “lisinho”;</p>
                                    <p>
                                        A depilação íntima (perianal) dura apenas 5 minutos e ainda facilita a higiene local.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="service-panel">
                <div class="container-fluid">
                    <div class="row">
                        <div class="service-panel__cover col-xs-12 col-sm-6 pull-right"><a class="service-panel__link" href="#"><img src="{{ asset('principal/img/upload/services_2/381871.jpg') }}" alt="VIRILHA COMPLETA - VIRILHA ÍNTIMA - VIRILHA SIMPLES"></a></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="service-panel__card col-xs-12 col-sm-6">
                                <div class="service-panel__top">
                                    <h2 class="title">PERNAS INTEIRAS – COXAS - MEIA PERNA - PÉS E DEDOS - JOELHO</h2><span class="cost"></span>
                                </div>
                                <div class="service-panel__desc">
                                    <p>Depilação a laser na região ajuda muito quem sofre com pelos encravados ou alergia após a depilação convencional (cera ou lâmina); </p>
                                    <p>
                                        Tratamento pode ser feito em qualquer época do ano sem restrições;</p>
                                    <p>
                                        Nosso equipamento possui ponteira com até 3 tempos (reguláveis) de resfriamento da pele antes do disparo do laser fazendo com que o tratamento seja rápido e prático</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--           end services-panels           /-->
            <!--           ¬ services-menu           /-->

            <!--           end services-menu           /-->
    </main>
@endsection
