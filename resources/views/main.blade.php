<!DOCTYPE html>
<!--include busca as partes do .blade que terão em todas paginas do site-->
<!--yield busca as partes que terão em pages , o conteudo de cada pagina em si-->
<!--Teste outra linguagem-->
<html lang="en">
  @include('partials._head')
  
  <body>

    <!--Incluindo parte da barra de navegação-->
    @include('partials._nav')

      <!--container-->
      <div class="container">
        

        <!--conteudo, todo conteudo que preenche o meio da pagina, toda pagina terá um diferente-->
        @yield('content')<!--yield busca os sections da pagina original-->
      
        <!--inclui a parte footer , que fica embaixo-->
        @include('partials._footer')

      </div>
      <!--inclui todos javascripts//que terão o mesmo efeito em todas paginas-->
      @include('partials._javascript')
        <!--inclui os javascripts que tem em paginas particulares-->
       @yield('scripts')
  </body>
</html>