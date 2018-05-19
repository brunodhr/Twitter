@extends('main')
@section('title','seguidores')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            @csrf
            <h3>
                Seguidores  :  {{ Auth::user()->followers->count() }}
            </h3>
            <p>
            <li class="list-group-item">{{ Auth::user()->followers}}</li>
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
    