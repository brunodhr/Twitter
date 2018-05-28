@extends('main')
@section('title','seguindo')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            @csrf
            <h3>
                Todos usuarios
            </h3>
            <p>
            @foreach($users as $user)
                <div class="card" style="margin-top: 5px">
                    <div class="card-header" style="padding-left: 20px">
                            <ul style="float: left;list-style-type: none; margin-left: -20px; margin-top: -4px; margin-bottom: -5px">
                                <li><strong>{{ $user->name }}</strong>   <a href="{{$user->username}}">{{ '@'.$user->username }}</a>
                            </ul>
                    </div>
                </div>
            @endforeach
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
    