@extends('main')
@section('title','Perfil')
@section('content')
	<div class="row justify-content-md-center">
        <div class="col-md-2">
            <div class="card-header" style="border: 5px solid #000000; background-color: #A9A9A9">
                    <div class="card-body">
                        <img src="{{ asset('storage/avatars/avatar.jpg')}}" alt="avatar" class="img-fluid">
                        <strong>{{ $user->name }}</strong>
                        <p class="card-text">{{ '@'. $user->username }}</p>
                    </div>
            </div>
                <ul class="list-group list-group-flush" style="max-width: 160px">
                    
                @if(!$user->followers->contains('id', Auth::user()->id))
                    <li class="list-group-item"><button id="btn-follow" class="btn btn-primay" style="max-width: 120px">Seguir</button></li>
                @else
                    <li class="list-group-item"><button id="btn-unfollow" class="btn btn-primay">Parar de seguir</button></li>
                @endif
                    <li class="list-group-item"> <a href="/">Tweets: {{ $user->tweets->count() }}</a></li>
                    <li class="list-group-item"><a href="/followers">Seguidores: {{ $user->followers->count() }}</a></li>
                    <li class="list-group-item"><a href="/followeds">Seguindo: {{ $user->followeds->count() }}</a></li>
                </ul>
        </div>
        <div class="col-md-7">
            @include('tweets.show')
        </div>
        <div class="col-md-3 col-md-offset-1"><!--Adiciona barra ao lado direito do site  -->
        <div class="card-header"style="margin-top:30px; border: 5px solid #000000; background-color: #A9A9A9">
            <h2>Side bar</h2>
            <a href="https://www.github.com/brunodhr">Github</a>
            <p>
            <a href="https://www.twitter.com.br/brunofilipe01">Twitter</a>
            </div>
        </div>
    </div>
@endsection