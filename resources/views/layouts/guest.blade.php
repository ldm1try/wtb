<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $title ?? config('app.name') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Scripts -->
  @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-gray-100">
  <div class="flex flex-col h-screen">
    <header class="px-4 border-b border-gray-200 bg-white">
      <div class="container mx-auto flex justify-between py-5">
        <div class="font-bold">
          <a href="{{ route('mainpage') }}">{{ config('app.name') }}</a>
          </div>
        <nav class="">2</nav>
        <div class="">
          @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
          @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
          @endauth
        </div>
      </div>
    </header>
    <main class="flex-auto px-4 py-5">
      <div class="container mx-auto">
        {{ $slot }}
      </div>
    </main>
    <footer class="px-4 border-t border-gray-200 text-center">
      <div class="container mx-auto py-5">
        <span>{{ config('app.name') }}</span>
        <span>@php echo(date('Y')) @endphp</span>
      </div>
    </footer>
  </div>
</body>

</html>
