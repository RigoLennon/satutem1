<!DOCTYPE html>
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>SDI</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link href="{{ asset('css/glint/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/glint/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/glint/main.css') }}" rel="stylesheet">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/glint/modernizr.js') }}"></script>
    <script src="{{ asset('js/glint/pace.min.js') }}"></script>
</head>

<body id="top">

<!-- home
================================================== -->
<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="img/calculadora.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

    <div class="shadow-overlay"></div>

    <div class="home-content">

        <div class="row home-content__main" style="margin-top: -15em">

            <h1>
                Gracias por registrate <br>
                se estan verificando tus datos <br>
                para poder ingresar. <br>
            </h1>

            <h3>Si no puedes ingresar ponte en contacto con el administrador</h3>

            <div class="home-content__buttons">

                <a href="{{ route('logout') }}" class="smoothscroll btn btn--stroke"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Iniciar sesion
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>


            </div>

        </div>
    </div>

    </div> <!-- end home-content -->

</section> <!-- end s-home -->