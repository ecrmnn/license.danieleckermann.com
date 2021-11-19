<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sitedex</title>
  <meta name="description" content="With Sitedex you get a complete map of every page on your site">
  <link rel="canonical" href="https://www.sitedex.app" />
  <meta property="og:title" content="Sitedex">
  <meta property="og:description" content="With Sitedex you get a complete map of every page on your site">
  <meta property="og:url" content="https://www.sitedex.app">
  <meta property="og:locale" content="en">
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{ asset('img/og.jpg') }}">
  <meta property="og:site_name" content="Sitedex">

  <link rel="icon" href="{{ asset('img/favicon.gif') }}" type="image/gif">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
  <main>
    @yield('content')
  </main>

  <footer class="bg-white" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
      <div class="mt-12 border-t border-gray-200 pt-8">
        <p class="text-xs text-gray-400 xl:text-center">
          &copy; 2021 Sitedex. All rights reserved.
        </p>
      </div>
    </div>
  </footer>
</body>

</html>
