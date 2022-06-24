<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('frontend.layout.style')
    @stack('addon-style')

  </head>

  <body>
    <main class="main" id="top">
        @include('frontend.layout.navbar')

        @yield('content')

        @include('frontend.layout.footer')
    </main>

    @stack('prepend-script')
    @include('frontend.layout.script')
    @stack('addon-script')
  </body>
</html>
