<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->

        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body id="fundo">

        <nav>
            <div class="nav-wrapper purple">
                <a href="" class="brand-logo">Bonecas de Pano</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="">Conta</a></li>
                    <li><a href="">Cadastrar</a></li>
                    <li><a href=""><i class="Tiny material-icons">add_shopping_cart</i></a></li>
                </ul>
            </div>
        </nav>

        <section class="slider">
            <section class="slider">
                <ul class="slides">
                    <li>
                        <img src="{{asset('images/Banner Bebe-1920x573.jpg')}}">  random image 
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('images/banner_bonecas5.jpg')}}">  random image 
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('images/banner_bonecas3.jpg')}}">  random image 
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('images/banner_bonecas4.jpg')}}">  random image 
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>


                <div class="row" align="center">

                    <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                    <button onclick="sliderNext()" class="btn blue">Próxima</button>

                </div>

            </section>>
          

            @yield('content')


            <footer class="page-footer purple">
                <!--<div class="container">-->
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Festa Encantada</h5>
                        <p class="grey-text text-lighten-4">Transforme esse momento em um momento Mágico para as crianças.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Bonecas de Pano</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Ursinhos de Pelúcia</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Caixinhas para Festa de Aniversário</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Encomenda de Presentes</a></li>
                        </ul>
                    </div>
                </div>
                <!--</div>-->


                <div class="footer-copyright">
                    <div class="container">
                        © 2020 Copyright Text
                        <a class="grey-text text-lighten-4 right" href="#!">Redes Sociais</a>
                    </div>
                </div>
            </footer>       




            <!--JavaScript at end of body for optimized loading-->
            <!--<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>-->

            <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
            <script src="{{asset('js/materialize.min.js')}}"></script>
            <!--<script src="{{asset('js/materialize.js')}}"></script>-->
            <script src="{{asset('js/init.js')}}"></script>

            <script type="text/javascript">
                        $(document).ready(function () {
                            $('.carousel').carousel();
                        });


            </script>

    </body>
</html>