<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Learning Path @yield('title')</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    @include('layouts/navigation')
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
