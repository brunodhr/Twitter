<!DOCTYPE html>
<!--Arquivo principal , onde guarda toda estrutura do site-->
<html lang="{{ app()->getLocale() }}">
  @include('partials._head')
  @include('partials._stylesheets')
  
  <body>

    @include('partials._nav')

      <div class="container">
        
        @yield('content')
      
        @include('partials._footer')

      </div>
      @include('partials._javascript')

      @yield('scripts')
  </body>
</html>