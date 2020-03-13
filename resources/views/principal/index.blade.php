@extends('layouts.main.main')
@include('layouts.main.partials.header')
@include('layouts.main.partials.menu_web')
@section('content')
<!--           end Page Header           /-->
<main class="page-content" id="content">
    <!--           = section intro           /-->
    <section class="intro-banner intro-bg" style="background-image: url('{{ asset('principal/img/upload/intro/banner.png') }}');">
        <div class="intro-banner__inner">
            <div class="extra-title">
                <h4 class="extra-title__top">Bem Vindo a</h4>
                <h1>Royal Laser</h1>
                <p class="extra-title__decor"><img class="svg brand-decor" src="{{ asset('principal/img/decor.svg') }}" alt="Decoration"></p>
                <p class="small">Você segura com o seu corpo</p>
            </div>
        </div>
    </section>
    <!--           end section intro           /-->
    <!--           ¬ features           /-->
    <div class="hm-features">
        <div class="container-fluid">
            <div class="hm-features__row row">
                <div class="hm-features__item col col-xs-6 col-sm-4">
                    <figure class="hm-features__icon"><img class="svg img-responsive" src="{{ asset('principal/img/icons/hot-stone-massage.svg') }}" alt="Stone massage"></figure>
                    <h2>Liberdade</h2>
                </div>
                <div class="hm-features__item col col-xs-6 col-sm-4">
                    <figure class="hm-features__icon"><img class="svg img-responsive" src="{{ asset('principal/img/icons/relax.svg') }}" alt="Whirlpool"></figure>
                    <h2>Economia</h2>
                </div>
                <div class="hm-features__item col col-xs-6 col-sm-4">
                    <figure class="hm-features__icon"><img class="svg img-responsive" src="{{ asset('principal/img/icons/tool.svg') }}" alt="Aromatherapy"></figure>
                    <h2>Conforto</h2>
                </div>
                <div class="hm-features__item col col-xs-6 col-sm-4">
                    <figure class="hm-features__icon"><img class="svg img-responsive" src="{{ asset('principal/img/icons/bottle.svg') }}" alt="Oil massage"></figure>
                    <h2>Segurança</h2>
                </div>
                <div class="hm-features__item col col-xs-6 col-sm-4">
                    <figure class="hm-features__icon"><img class="svg img-responsive" src="{{ asset('principal/img/icons/people.svg') }}" alt="Finnish sauna"></figure>
                    <h2>Resultado</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="hm-history">
        <div class="panels-wrapper">
            <div class="container">
                <h1 class="title-hidden">title</h1>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <article class="panel-board">
                            <header>
                                <h2 class="h1 panel-board__title">PELES BRONZEADAS</h2>
                                <h6 class="sub">A RoyalLaser atende todos os tipos de pele, inclusive as bronzeadas.</h6>
                            </header>
                            <div class="panel-board__main">
                                <p>O Brasil apresenta uma diversidade enorme de tons de pele. A nossa tecnologia é a que melhor se adapta para atender esta demanda</p>
                                <p>O tratamento Royallaser garante 100% de eficácia na remoção dos pelos, dos tons mais claros de pele até os mais escuros.</p>
                            </div>
                            <footer class="panel-board__bottom"><a class="btn btn--warn" href="#agendamento">Confira</a></footer>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 hm-history__slides panel-wd panel-wd--right">
                        <div class="hm-history-carousel owl-theme owl-carousel js-history-carousel">
                            <div class="panel-wd__slide"><img src="{{ asset('principal/img/upload/slides/5905.jpg') }}" alt="#"></div>
                            <div class="panel-wd__slide"><img src="{{ asset('principal/img/upload/slides/4965.jpg') }}" alt="#"></div>
                            <div class="panel-wd__slide"><img src="{{ asset('principal/img/upload/slides/3089.jpg') }}" alt="#"></div>

                        </div>
                        <!--           ¬ control panel           /-->
                        <div class="control-panel control-panel--mobile">
                            <button class="control-panel__nav prev"><i class="fa fa-angle-left"></i></button>
                            <button class="control-panel__nav next"><i class="fa fa-angle-right"></i></button>
                            <div class="control-panel__dots js-pagination"></div>
                        </div>
                        <!--           end control panel           /-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-story">
        <div class="panels-wrapper panels-wrapper--dark">
            <div class="container">
                <div class="row">
                    <!--           ¬ panel-wide           /-->
                    <div class="col-xs-12 col-sm-6 about-story__slides panel-wd panel-wd--dark">
                        <div class="about-story__slide" style="background-image: url(assets/img/upload/about/about_bg.jpg);">
                            <figure class="about-story__img hidden-xs"><img src="{{ asset('principal/img/upload/about/3.png') }}" alt="Full Body Massage"></figure>
                            <h3 class="about-story__name pull-right hidden-xs">Depilação e Estética<small></small></h3>
                            <div class="triangle hidden-xs"></div>
                        </div>
                    </div>
                    <!--           end panel-wide           /-->
                    <!--           ¬ panel-board           /-->
                    <div class="col-xs-12 col-sm-6 col-sm-push-6">
                        <article class="panel-board panel-board--right">
                            <header>
                                <h2 class="h1 panel-board__title">Pacotes</h2>
                                <h3 class="about-story__name visible-xs">Depilação e Estética<small></small></h3>
                            </header>
                            <div class="panel-board__main">
                                <h4>Que tal garantir o melhor pacote?</h4>
                            </div>
                            <p>Fique linda, criamos cada pacote pensando em você!</p>
                        </article>
                    </div>
                    <!--           end panel-board           /-->
                </div>
            </div>
        </div>
    </section>
    <div class="hm-stat st-row st-row--bg">
        <div class="bg-pattern">
            <div class="jarallax prlx" style="background-image: url(assets/img/bg-section.png);"></div>
        </div>

    </div>

    <div class="section-video st-row st-row--gray st-row--hr">
        <div class="container no-gutters-sm">
            <div class="video-contain rounder-right">
                <!--           * preview screen           /-->
                <div class="video-contain__preview" style="background-image: url(assets/img/upload/intro/preview_1.jpg);">
                    <div class="overlay overlay--light"></div>
                    <div class="flag flag--top-right">video tour</div>
                </div>
                <!--           * iframe           /-->
                <div class="video-contain__wrapper">
                    <iframe data-id="" src="about:blank" allowfullscreen></iframe>
                </div>
                <!--           * controls           /-->
                <div class="video-controls">
                    <button class="btn-play"></button>
                </div>
            </div>
        </div>
    </div>
    <!--           end section video           /-->
    <!--           = reservation form           /-->
    <section class="st-row" id="reservation">
        <div class="container">
            <div class="hr-heading rotate">
                <h1>Agendamento</h1><small>Faça seu orçamento</small>
            </div>
            <div class="row">
                <!--           ¬ form           /-->
                <div class="col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2 item-sm">
                    <form class="booking-form js-form-booking" action="#" method="POST" autocomplete="off">
                        <div class="row row-sm">
                            <div class="form-group col-xs-12">
                                <label class="label-control">Seu nome <span class="label-warn">*</span></label>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                            <div class="form-group col-xs-12">
                                <label class="label-control">Seu e-mail <span class="label-warn">*</span></label>
                                <input class="form-control" type="email" name="email" required>
                            </div>
                            <div class="form-group col-xs-12">
                                <label class="label-control">Seu telefone <span class="label-warn">*</span></label>
                                <input class="form-control" type="tel" name="phone" required data-mask="(00) 0000-0000" data-mask-selectonfocus="true">
                            </div>
                            <!--         datepicker/clockpicker         *-->


                            <!--           ¬ number-of-reversed           /-->

                            <!--           end number-of-reversed           /-->
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="label-control">Deixe sua mensagem</label>
                                    <textarea class="form-control" rows="10" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="booking-form__submit col-auto">
                                    <button class="btn btn--darker" type="submit">enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--           end form           /-->
                <!--           = contacts           /-->
                <div class="col-auto col-sm-6 col-md-5 col-lg-4">
                    <div class="contacts-list">
                        <p class="contacts-list__top">

                            Teremos o maior prazer em atendê-lo. Se você tiver alguma dúvida ou sugestão sobre o Royal Laser, use nossos contatos abaixo.</p>
                        <div class="contacts-list__main">
                            <h3>Telefone</h3>
                            <p><a href="tel:+55 61  99800-7328">+55 61  99800-7328</a></p>

                            <p><a href="tel:+55 61 3970-3883">+55 61 3970-3883</a></p>

                            <h3>Endereço</h3>
                            <address class="address">Qs 01 Rua 210 Loja 33 – Edifício LED
                                Águas Claras,<br>DF 71950-770<br></address>
                        </div>
                    </div>
                    <!--           = share           /-->
                    <div class="contacts-share">
                        <h3>Social media</h3>
                        <ul class="social-list">
                            <li><a class="fa-stack fa-lg" href="https://www.instagram.com/royallaseroficial/"><i class="fa fa-circle fa-stack-2x"></i><i class="icon fa fa-instagram fa-stack-1x fa-inverse"></i></a></li>
                            <li><a class="fa-stack fa-lg" href="https://www.facebook.com/royallaserbsb/"><i class="fa fa-circle fa-stack-2x"></i><i class="icon fa fa-facebook fa-stack-1x fa-inverse"></i></a></li>

                        </ul>
                    </div>
                    <!--           end share           /-->
                </div>
                <!--           end contacts           /-->
            </div>
        </div>
    </section>
    <!--           end reservation form           /-->
    <!--           = about           /-->

    <!--           end about           /-->
    <!--           = carousel spa-menu           /-->

    <!--           end carousel spa-menu           /-->
    <!--           ¬ map           /-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.328323584729!2d-48.04658138485438!3d-15.839332089023255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a328ba020acf9%3A0x1a060bcd281108d4!2sEd%C3%ADficio%20Led%20Office!5e0!3m2!1spt-BR!2sbr!4v1584024992938!5m2!1spt-BR!2sbr" width="1920" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!--           end map           /-->
</main>
@endsection


