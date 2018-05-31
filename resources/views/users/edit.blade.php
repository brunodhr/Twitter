<!--Tela de edicao de perfil-->
@extends('main')
@section('title','Editar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body" style="margin-left: -10px">
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update', Auth::user()->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field("PUT") }}

                        <div class="col-md-3" style="margin-bottom:-60px; margin-left: -30px"> 
                            @if(Auth::user()->avatar == Null) 
                                <img src="{{ asset('storage/avatar.png')}}" class="img-fluid">  
                            @else 
                                <img src="{{ asset('storage/avatars/'.Auth::user()->avatar) }}" class="card-img-top"> 
                            @endif 
                        </div> 

                        <input type="hidden"name="id" value="{{ Auth::user()->id }}" readonly="true">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}"  autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                                <div class="col-md-6">
                                    <input name="username" id="username" type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ Auth::user()->username }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>
                                <div class="col-md-6">
                                    <input name="avatar" id="avatar" type="file" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Salvar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
