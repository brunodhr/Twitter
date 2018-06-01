<!--Tela principal do sistema-->
@extends('main')
@section('title','Home')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-2">
            <div class="card-header" style="border: 5px solid #000000; background-color: #FFFFFF">
                    <div class="card-body">
                    @if (Auth::user()->avatar == Null)
                        <img src="{{ asset('storage/avatar.png')}}" class="img-fluid"> 
                    @else
                        <img src="{{ asset('storage/avatars/'.Auth::user()->avatar) }}" class="img-fluid">
                    @endif
                        <strong>{{ Auth::user()->name }}</strong>
                        <a href="/{{Auth::user()->username}}" class="card-text">{{ '@'. Auth::user()->username }}</p>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tweets: {{ Auth::user()->tweets->count() }}</li>
                    <li class="list-group-item"><a href="/{{Auth::user()->username}}/followers">Seguidores: {{ Auth::user()->followers->count() }}</a></li>
                    <li class="list-group-item"><a href="/{{Auth::user()->username}}/followings">Seguindo: {{ Auth::user()->followeds->count() }}</a></li>
                </ul>
        </div>
        <div class="col-md-7">
            <div class="jumbotron" style="background-color: #000000 ">

                    @if (session('status'))
                        <div class="card-body">
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="card-body">
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif     

                <div class="card-header">
                    <div class="card-body">
                        <form method="POST" action="{{ route('tweet.store', Auth::user()->id) }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="content" id="content" rows="2" placeholder="O que está acontecendo?" style="resize: none"></textarea>
                                @if ($errors->has('content'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-check"></i>
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-camera"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
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
</div>
@endsection
    