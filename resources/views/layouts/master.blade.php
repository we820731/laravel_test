<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog - @yield('title')</title>
  </head>

  <body>
      @include('layouts.partials.header')
      @yield('content')
      @include('layouts.partials.footer')
    </body>
</html>
