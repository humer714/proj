<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/withdraw.css" />


    <link rel="stylesheet" href="assets/css/profile.css" />
    <link rel="stylesheet" href="assets/css/order.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @livewireStyles

    <!-- Scripts -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <header class="container">
            <div class="logo">
              <a href="/">
                <img src="assets/images/logo.png" alt="" />
              </a>
            </div>
          </header>

        <main class="py-4">
            @yield('content')
        </main>
        <nav>
            <ul>
              <li class="active"><a href="/home">Home</a></li>
              <li><a href="profile">Profile</a></li>
              <li><a href="order">Order</a></li>
              <li><a href="service">Service</a></li>
              <li><a href="record">Record</a></li>
            </ul>
          </nav>
    </div>
</body>
@livewireScripts
</html>
