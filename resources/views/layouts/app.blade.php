<html>
  <head>
    <title>{{ $title or 'Laravel News' }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="{{ asset('js/components.js') }}"></script>
    <script src="{{ asset('vendor/react-laravel/react_ujs.js') }}"></script>
  </head>
  <body>
    @react_component('Header', [], [ 'prerender' => true ])

    <div class="container">
        {{ $slot }}
    </div>
  </body>
</html>
