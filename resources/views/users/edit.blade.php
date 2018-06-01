<!--Tela de edicao de perfil-->
@extends('main')
@section('title','Editar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar</div>

                <div class="card-body" style="margin-left: -10px">
                    <form method="POST" action="{{ route('home') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="col-md-3" style="margin-bottom: -60px">
                    @if(Auth::user()->avatar == Null)
                        <img src="{{ asset('storage/avatar.png')}}" class="img-fluid"> 
                    @else
                        <img src="{{ asset('storage/avatars/'.Auth::user()->avatar) }}" class="card-img-top">
                    @endif
                    </div>
                </div>
                        <div class="form-group row" style="margin-top: -100px">

                            <label for = "avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>
                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control" name="avatar">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{Auth::User()->name}}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">Usuário</label>

                            <div class="col-md-6">
                            <input id="usuario" type="text" class="form-control @if($errors->has('username')) is-invalid @endif" name="username" value="{{Auth::User()->username}}" autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{Auth::User()->email}}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    Alterar Senha
                                </button>
                                <p>
                                
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i>
                                </button>
                                <button type="submit" class="btn btn-danger">
                                    Cancelar
                                </button>
                                <p> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
