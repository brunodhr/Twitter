@extends('main')
@section('title', 'Home')


@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="styles.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <div class="col-md-6">
          
        {!! Form::open(array('route'=>'tweets.store')) !!}<!--abre o formulario, adiciona ao route a ligação de armazenar no banco em toda tabela tweets, logo após faz a validação dos dados-->
          {{Form::text('id',null,array('class' => 'form-control','required'=>'','placeholder'=>"Id do usuario dono do tt:(momentaneo)")) }}
          {{ Form::text('content',null, array('class' => 'form-control','required'=>'','placeholder'=>"Tuita pra nois"))}}<!--mesma coisa do title-->
  
            {{Form::submit('Tweetar', array('class' => 'btn btn-success btn-lg btn-primary','style' => 'margin-top : 20px'))}}<!--botão feito com o css do bootstrap, logo depois adiciono css manualmente para poder definir margem do topo-->
            <!--depois de clicar no botão acima , está indo para tweets em vez de tweets/1,2,3 como no tutorial-->
        {!! Form::close() !!}         
        </div>
      </div>
    </div>
  </div><!-- end of .row--> 

  <div class="row">
        <div class="col-md-12">
            <table class="table">
              <thead>
                <th>#</th>
                <th>Id do dono</th>
                <th>Conteudo</th>
                <th>Criado em</th>
                <th></th>
              </thead>

              <tbody>
                @foreach($tweets as $tweet)
                  <tr>
                  <th>{{$tweet->id}}</th>
                  <td>{{$tweet->user_id}}</td>
                  <td>{{substr($tweet->content,0,50)}}{{strlen($tweet->content) > 50 ? "..." : ""}}</td>><!-- se for maior de 50 apaga o restante e digita ... no final -->
                  <td>{{$tweet->created_at}}</td>
                  <td><a href="#" class="btn btn-default">Responder</a><a href="#" class="btn btn-default">Ver mais</a></td>
                  
                  </tr>

                @endforeach
              </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
<script>
  confirm('Test Scripts');//logo apos entrar no site, na pagina welcome , aparece uma mensagem feita por js para usuario //apenas de teste
</script>
@endsection