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

    <body>

        <nav>
            <div class="nav-wrapper teal darken-3">
                <div class='container'>
                <a href="" class="brand-logo ">Bonecas de Pano</a>
                 </div>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="">Conta</a></li>
                    <li><a href="">Cadastrar</a></li>
                    <li><a href=""><i class="Tiny material-icons">add_shopping_cart</i></a></li>
                    
                    <!--<span class="new badge blue">4</span>-->
                </ul>
               
            </div>
        </nav>

       
            @yield('content')

        <!--JavaScript at end of body for optimized loading-->
        <!--<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>-->

        <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
        <script src="{{asset('js/materialize.min.js')}}"></script>
        <!--<script src="{{asset('js/materialize.js')}}"></script>-->
        <script src="{{asset('js/init.js')}}"></script>
    </body>
</html>