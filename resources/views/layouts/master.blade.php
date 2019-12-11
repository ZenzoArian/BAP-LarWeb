<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <header>
      HEADER
      @section('header')
      De header
      @show
    </header>

    <nav>
      NAV
      <ul>
        <li><a href="{{route('homepage')}}">home</a></li>
        <li><a href="{{route('about-us')}}">about-us</a></li>
        <li><a href="{{route('show-name', ['name' => 'henkie']) }}">show-name</a></li>
      </ul>
    </nav>

    <main>
      MAIN
      @yield('content')

    </main>

    <footer>
      FOOTER
    </footer>

  </body>
</html>
