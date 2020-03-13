<body class="page-home animsition" id="rsHome">
<div class="over-page" id="overPage"></div>
<!--           = mobile menu           /-->

<!--           end mobile menu           /-->
<!--           = Page Header           /-->
<header class="page-header" id="panelHeader">
    <nav class="navbar navbar-default" id="navbar">
        <div class="navbar__topline">
            <div class="navbar-header container"><a class="navbar-brand" href="index.html"><img class="logo svg img-responsive" src="{{ asset('principal/img/logo.svg') }}" alt="Bem vindo a Royal Laser"/></a><a class="navbar__toggle-reservation button" href="#" data-toggle="modal" data-target="#modal-inquiry"><i class="fa fa-bookmark-o"></i>Reservation</a><a class="menu-trigger visible-xs" id="trigger" href="#" role="button"><span class="menu-trigger__elem"></span></a>
                <ul class="social-list pull-right hidden-xs">
                    <li><a class="fa-stack fa-lg" href="#"><i class="fa fa-circle fa-stack-2x"></i><i class="icon fa fa-instagram fa-stack-1x fa-inverse"></i></a></li>
                    <li><a class="fa-stack fa-lg" href="#"><i class="fa fa-circle fa-stack-2x"></i><i class="icon fa fa-facebook fa-stack-1x fa-inverse"></i></a></li>
                    <li><a class="fa-stack fa-lg" href="#"><i class="fa fa-circle fa-stack-2x"></i><i class="icon fa fa-twitter fa-stack-1x fa-inverse"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="navbar__menu">
            <div class="container">
                <ul class="nav navbar-nav navbar-menu hidden-xs">
                    <li><a href="#"><span>Home</span></a>

                    </li>
                    <li><a href="{{ route('specialties') }}"><span>Especialidades</span></a>

                    </li>
                    <li><a href="{{ route('services') }}"><span>Serviços</span></a>

                    </li>
                    <li><a href="{{ route('blog') }}"><span>Blog</span></a>

                    </li>



                </ul><a class="navbar__toggle-reservation button" href="#" data-toggle="modal" data-target="#modal-inquiry"><i class="fa fa-bookmark-o"></i>Agendamento</a>
            </div>
        </div>
    </nav>
</header>
