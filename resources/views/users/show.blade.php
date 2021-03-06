<!--Tela de Perfil-->
@extends('main')
@section('title','Perfil')
@section('content')
	<div class="row justify-content-md-center">
        <div class="col-md-2">
            <div class="card-header" style="border: 5px solid #000000; background-color: #FFFFFF">
                    <div class="card-body">
                        @if ($user->avatar == Null)
                        <img src="{{ asset('storage/avatar.png')}}" class="img-fluid"> 
                    @else
                        <img src="{{ asset('storage/avatars/'.$user->avatar) }}" class="img-fluid">
                    @endif
                        <strong>{{ $user->name }}</strong>
                        <a href="/{{$user->username}}" class="card-text">{{ '@'. $user->username }}</p>
                    </div>
            </div>
                <ul class="list-group list-group-flush">
                @if(!Auth::check())
                    
                @elseif($user->followers->contains('id', Auth::user()->id))
                    <li class="list-group-item">
                        <form method="POST" action="{{ route('user.unfollow', $user->id) }}">
                            @csrf
                            <button type="submit" id="btn-unfollow" class="btn btn-primary">Deixar de seguir</button>
                        </form>
                    </li>
                @elseif(Auth::user()->id == $user->id)
                @else
                    <li class="list-group-item">
                        <form method="POST" action="{{ route('user.follow', $user->id) }}">
                            @csrf
                            <button type="submit" id="btn-follow" class="btn btn-primary">Seguir</button>
                        </form>
                    </li>
                @endif
                    <li class="list-group-item">Tweets: {{ $user->tweets->count() }}</li>
                    <li class="list-group-item"><a href="/{{$user->username}}/followers">Seguidores: {{ $user->followers->count() }}</a></li>
                    <li class="list-group-item"><a href="/{{$user->username}}/followings">Seguindo: {{ $user->followeds->count() }}</a></li>
                </ul>
        </div>
        <div class="col-md-7">
            @include('tweets.show')
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
@endsection