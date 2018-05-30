<!--Tela inicial-->
@extends('main')
@section('title', 'Home')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="grid">
        <div class="title m-b-md">
                Twitter
        </div>
        <div class="links">
        @if(!Auth::id())
            <a href="/login">Logar</a>
            <a href="/register">Registrar</a>
        @else
            <p>Voce ja esta logado como {{ Auth::user()->username }}</p>
            <p>
            <a href="{{ url('/home') }}">Entrar como {{ Auth::user()->username }}</a>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Sair
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        @endif
        </div>
    </div>
</div>
@endsection
</html>
