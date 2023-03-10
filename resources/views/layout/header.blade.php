<header>
      <nav class="container mx-auto flex items-start justify-between p-4 h-32">
        <a href="{{route('index')}}">
          <i class="uil uil-home text-4xl text-blue-500"></i>
        </a>
        <div class="h-full">
          <img src="assets/logo.png" alt="logo" class="h-full" />
        </div>
        <form method="post" action="{{route('logout')}}">
          @csrf
        <button type="submit" class="uil uil-power text-4xl text-blue-500"></button>
        </form>
      
      </nav>
    </header>