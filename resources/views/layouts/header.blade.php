<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desa Wringinanom</title>

  <!-- Fonts -->

  <!-- Swiper (If you use it) -->

  <!-- CSS File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  @vite('resources/css/app.css')

</head>
<body>
  <header class="bg-primary">
    <nav class="mx-auto w-11/12 flex justify-between py-4 text-white font-dusha">
      <!-- LEFT SIDE -->
      <div class="flex justify-between gap-2">
        <img class="h-16 w-16" src="{{asset('assets/img/logo.svg')}}" alt="logo ponorogo">
        <div class="flex flex-col justify-center">
          <h1 class="text-lg">Desa Wringinanom</h1>
          <div>
            <p class="text-sm leading-4">Kec. Sambit, Kab. Ponorogo <br/> Jawa Timur</p>
          </div>
        </div>
      </div>
      <!-- RIGHT SIDE -->
      <div class="flex justify-center items-center">
        <i class="fa-solid fa-bars fa-2xl"></i>
      </div>
    </nav>
  </header>