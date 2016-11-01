<!DOCTYPE html>
<html lang="en">
  @include('partials._head')
    <body>
  @include('partials._nav')
    
    <div class="container">{{--CONTAINER STARTED--}}
        @include('partials._messages')

        @yield('content')
    </div> 
    {{--CONTAINER ENDED--}}

    @include('partials._footer')
    @include('partials._javascript')
  </body>
</html>