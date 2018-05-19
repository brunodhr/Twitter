@extends('main')
@section('title','seguindo')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            @csrf
            <h3>
                Seguindo
            </h3>
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
    