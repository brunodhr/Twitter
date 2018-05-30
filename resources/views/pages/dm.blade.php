<!--Tela principal do sistema-->
@extends('main')
@section('title','Privado')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-2">
            <div class="card-header" style="border: 5px solid #000000; background-color: #FFFFFF">
            </div>
        </div>    
        <div class="col-md-3 col-md-offset-1"><!--Adiciona barra ao lado direito do site  -->
            <div class="card-header"style="margin-top:30px; border: 5px solid #000000; background-color: #FFFFFF">
                <h2>Side bar</h2>
                <a href="">Github</a>
                <p>
                <a href="">Twitter</a>
            </div>
        </div>
    </div>
</div>
@endsection
    