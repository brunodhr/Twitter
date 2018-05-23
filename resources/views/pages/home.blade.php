@extends('main')
@section('title','Home')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-2">
            <div class="card-header" style="border: 5px solid #000000; background-color: #A9A9A9">
                @if (Auth::user()->avatar == Null)
                        <p>Nenhuma imagem cadastrada</p>
                    @else
                        <img src="{{ asset("storage/{Auth::user()->avatar}") }}" class="img-fluid">
                @endif
                <strong>{{ Auth::user()->name }}</strong> 
                <a href="/{{Auth::user()->username}}">  {{ '@'.Auth::user()->username }} </a> 
            </div>
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
                                <textarea class="form-control" name="content" id="content" rows="2" placeholder="Pelo visto não vai twittar né" style="resize: none">{{ old('username') }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">
                                    Tweetar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                    Anexar arquivo
                            </button>
                        </form>
                    </div>
                </div>
            </div>
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
</div>
@endsection
    