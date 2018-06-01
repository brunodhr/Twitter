<!--Tela de listagem dos usuarios seguidores-->
@extends('main')
@section('title','Seguidores')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <h3>
                Seguidores  :  {{$user->followers->count()}}
            </h3>
            <p>
                @foreach($user->followers as $follower)
                <div class="card" style="margin-top: 5px">
                    <div class="card-header" style="padding-left: 20px">
                            <ul style="float: left;list-style-type: none; margin-left: -20px; margin-top: -4px; margin-bottom: -5px">
                                    <li><strong>{{ $follower->name }}</strong>   <a href="/{{$follower->username}}">{{ '@'.$follower->username }}</a>
                            </ul>
                    </div>
                </div>
                @endforeach
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
    