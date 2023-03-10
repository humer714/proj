<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css"
    />
    
    <link
    rel="stylesheet"
    href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
          <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    
    @livewireStyles
    @vite('resources/css/app.css')
  </head>
  <body>
    @include('layout.header')

    @yield('content')

    @include('layout.footer')
    @livewireScripts
  </body>
  <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</html>
