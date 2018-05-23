@extends('main')
@section('title', 'Home')
@include('partials._stylesheets')

@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="styles.css">
@endsection

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
                        <a href="{{ url('/home') }}">Entrar como {{ Auth::user()->username }}</a>
                    @endif
                </div>
            </div>
        </div>
    @endsection
</html>
