<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'AutoServis' }}</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

  <header class="header-bg bg-indigo-600 py-4">
    <div class="container mx-auto">
      <h1 class="header-title text-3xl md:text-5xl text-white font-bold">AutoServis</h1>
      <nav>
        <ul class="flex space-x-6 mt-4 text-white">

          <li><a href="{{ url('/') }}" class="menu-text">Domov</a></li>
          <li><a href="{{ url('/services') }}" class="menu-text">Služby</a></li>
          <li><a href="{{ url('/contact') }}" class="menu-text">Kontakt</a></li>
          <li><a href="{{ url('/reviews') }}" class="menu-text">Hodnotenia</a></li>

          @guest
            <li><a href="{{ url('/login') }}" class="menu-text">Prihlásenie</a></li>
            <li><a href="{{ url('/register') }}" class="menu-text">Registrácia</a></li>
          @endguest

          @auth
            <li><a href="{{ route('profile.edit') }}" class="menu-text">Upraviť profil</a></li>
            <li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="menu-text">
                  Odhlásenie
                </button>
              </form>
            </li>
          @endauth

        </ul>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4 md:p-8">
    @yield('content')
  </main>

  <footer class="footer bg-indigo-600 py-4">
    <div class="container mx-auto text-center text-white">
      <p>Ďakujeme za využitie našish služieb</p>
      <p>&copy; 2024 AutoServis. Všetky práva vyhradené.</p>
    </div>
  </footer>

  @vite('resources/js/app.js')

</body>
</html>
