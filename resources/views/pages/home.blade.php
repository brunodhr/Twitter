@extends('main')
@section('title','Home')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-2">
            <div class="card border-dark">
                <img src="{{ asset('storage/avatars/avatar.jpg')}}" class="card-img-top" >
            </div>
            <form method="POST" action="{{ route('tweet.store', Auth::user()->username) }}">
        </div>
        <div class="col-md-7">
            <div class="jumbotron">

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
                                <textarea class="form-control" name="content" id="content" rows="2" placeholder="Tuita pra nois" style="resize: none">{{ old('username') }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right; width: 150px">Tweetar</button>
                        </form>
                    </div>
                </div>
            </div>
            @include('tweets.show')
            
        </div>
        <div class="col-md-3 col-md-offset-1" style="margin-top:100px"><!--Adiciona barra ao lado direito do site  -->
            <h2>Side bar</h2>
            <a href="">Github</a>
            <p>
            <a href="">Twitter</a>
        </div>
    </div>
</div>
@endsection
