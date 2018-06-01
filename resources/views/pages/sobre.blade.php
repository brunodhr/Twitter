<!--Tela de apresentacao do site-->
@extends('main')
@section('title','Sobre')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <h1 style="font-size: 100px; margin-left: -100px">
                Sobre
            <h4 style="font-size: 25px">
                <p>Ferramentas utilizadas</p>
                <i class="fab fa-html5"style="font-size: 5em;"></i>
                <i class="fab fa-css3-alt"style="font-size: 5em;"></i>
                <i class="fab fa-laravel"style="font-size: 5em;"></i>
                <i class="fab fa-php"style="font-size: 5em;"></i>
                <i class="fab fa-vuejs"style="font-size: 5em;"></i>

                <p>Compativel com</p>
                <i class="fab fa-apple"style="font-size: 3em;"></i>
                <i class="fab fa-android"style="font-size: 3em;"></i>
                <i class="fab fa-windows"style="font-size: 3em;"></i>
                <p>
                <i class="fab fa-firefox"style="font-size: 3em;"></i>
                <i class="fab fa-chrome"style="font-size: 3em;"></i>
                <i class="fab fa-edge"style="font-size: 3em;"></i>
                <i class="fab fa-safari"style="font-size: 3em;"></i>
                <i class="fab fa-internet-explorer"style="font-size: 3em;"></i>
            </h4>
            </h1>
        </div>
        
        <div class="col-md-3 col-md-offset-1"><!--Adiciona barra ao lado direito do site  -->
            <div class="card-header"style="margin-top:30px; border: 5px solid #000000; background-color: #FFFFFF">
                <h2><i class="fas fa-link"></i>Links</h2>
                <a href="https://github.com/brunodhr"><i class="fab fa-github" style="font-size: 2em;"></i></a>
                <a href="https://facebook.com/brunofilipe01"><i class="fab fa-facebook"style="font-size: 2em;"></i></a>
                <a href="https://instagram.com/brunofilipe01"><i class="fab fa-instagram"style="font-size: 2em;"></i></a>
                <a href="https://twitter.com/brunofilipe01"><i class="fab fa-twitter"style="font-size: 2em;"></i></a>
                <a href="https://www.linkedin.com/in/brunodhr"><i class="fab fa-linkedin"style="font-size: 2em;"></i></a>
                <a href="https://laravelisthelimit.slack.com/"><i class="fab fa-slack"style="font-size: 2em;"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
</html>