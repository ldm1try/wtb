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

<body class="font-sans text-gray-900 antialiased">
  <div class="flex flex-col h-screen">
    <header class="px-3 border-b border-gray-300">
      <div class="flex justify-between py-3">
        <div class="font-bold">{{ config('app.name') }}</div>
        <div class="">2</div>
        <div class="">3</div>
      </div>
    </header>
    <main class="flex-auto px-3 py-5">
      {{ $slot }}
    </main>
    <footer class="px-3 border-t border-gray-300 text-center">
      <div class="py-3">
        {{ config('app.name') }} - @php echo(date("Y")) @endphp
      </div>
    </footer>
  </div>
</body>

</html>
