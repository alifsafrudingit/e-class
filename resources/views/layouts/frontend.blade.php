<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Semangat Koding Class</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
      <link rel="stylesheet" href="{{ url('/frontend/css/main.css') }}">
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> 
    </head>
    <body>

    @include('components.frontend.navbar')

    @yield('content')
    
    @include('components.frontend.footer')
    </body>
  </html>