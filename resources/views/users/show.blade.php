@extends('main')
@section('title','Perfil')
@section('content')
	<div class="row justify-content-md-center">
        <div class="col-md-2">
            <div class="card-header" style="border: 5px solid #000000; background-color: #A9A9A9">
                    <div class="card-body">
                        <strong>{{ $user->name }}</strong>
                        <p class="card-text">{{ '@'. $user->username }}</p>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    
                @if(!$user->followers->contains('id', Auth::user()->id))
                    <li class="list-group-item"><button id="btn-seguir" class="btn btn-primay">Seguir {{ $user->username }}</button></li>
                @else
                    <li class="list-group-item"><button id="btn-seguir" class="btn btn-primay" disabled>Você já segue {{ $user->username }}</button></li>
                @endif
                    <li class="list-group-item">Tweets: {{ $user->tweets->count() }}</li>
                    <li class="list-group-item">Seguidores: {{ $user->followers->count() }}</li>
                    <li class="list-group-item">Seguindo: {{ $user->followeds->count() }}</li>
                </ul>
        </div>
        <div class="col-md-7">
            @include('tweets.show')
        </div>
        <div class="col-md-3 col-md-offset-1"><!--Adiciona barra ao lado direito do site  -->
        <div class="card-header"style="margin-top:30px; border: 5px solid #000000; background-color: #A9A9A9">
            <h2>Side bar</h2>
            <a href="">Github</a>
            <p>
            <a href="">Twitter</a>
            </div>
        </div>
    </div>



@endsection