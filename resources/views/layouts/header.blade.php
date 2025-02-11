<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desa Wringinanom</title>

  <!-- Fonts -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=IBM+Plex+Sans:wght@300;400;500;700&display=swap');
  </style>
  <!-- Swiper (If you use it) -->
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <!-- CSS File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  @vite('resources/css/app.css')
  <script src="{{asset('assets/js/navbar.js')}}"></script>
  <script type="module" src="{{asset('assets/js/swiper.js')}}"></script>
  <script src="{{asset('assets/js/dokumen.js')}}"></script>
  <script src="{{asset('assets/js/galery.js')}}" ></script>
</head>
<body>
  <header class="bg-primary fixed top-0 left-0 right-0 z-20">
    <nav class="mx-auto w-11/12 py-4 text-white font-dusha sm:flex sm:justify-between sm:items-center">
        <div class="flex justify-between">
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
            <div onclick="toggleDropdownMenu('hamburger-list')" class="flex justify-center items-center cursor-pointer sm:hidden">
              <i class="fa-solid fa-bars fa-2xl"></i>
              <i class="fa-solid fa-xmark fa-2xl hidden"></i>
            </div>
        </div>

        <!-- Dropdown -->
        <div id="hamburger-list" class="font-bold hidden sm:flex gap-5">
            <!-- profil -->
            <div class="my-5">
                <div onclick="toggleDropdownMenu('dropdown-profil'), rotateArrow('profil')" id="profil" class="flex justify-between cursor-pointer">
                    <span>Profil</span>
                    <img class="h-5 w-5" src="{{asset('assets/img/arrow.svg')}}">
                </div>

                <!-- dd profil -->
                <div id="dropdown-profil" class="pl-4 hidden my-5 sm:absolute sm:p-2 sm:bg-primary sm:rounded">
                    <a href="/sejarah"><p>Sejarah</p></a>

                    <!-- lembaga -->
                    <div onclick="toggleDropdown('dropdown-lembaga'), rotateArrow('lembaga')" id="lembaga" class="flex justify-between my-5 cursor-pointer">
                      <span>Lembaga</span>
                      <img class="h-5 w-5" src="{{asset('assets/img/arrow.svg')}}">
                    </div>
                    <!-- dd lembaga -->
                    <div id="dropdown-lembaga" class="pl-5 hidden">
                        <ul>
                            <li class="my-5"><a href="/lembaga"><p>Karang Taruna</p></a></li>
                            <li class="my-5"><a href="/lembaga"><p>PKK</p></a></li>
                            <li class="my-5"><a href="/lembaga"><p>BPD</p></a></li>
                            <li class="my-5"><a href="/lembaga"><p>BUMDes</p></a></li>
                        </ul>
                    </div>

                    <!-- agenda kreasi -->
                    <div onclick="toggleDropdown('dropdown-agenda-kreasi'), rotateArrow('agenda-kreasi')" id="agenda-kreasi" class="flex justify-between my-5 cursor-pointer">
                      <span>Agenda Kreasi</span>
                      <img class="h-5 w-5" src="{{asset('assets/img/arrow.svg')}}">

                    </div>
                    <!-- dd agenda kreasi -->
                    <div id="dropdown-agenda-kreasi" class="pl-5 hidden">
                        <ul>
                            <li class="my-5"><a href="/agenda"><p>Kesenian</p></a></li>
                            <li class="my-5"><a href="/agenda"><p>Industri</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
          <!-- surat dan dokumen -->
          <div class="my-5">
              <div onclick="toggleDropdown('dropdown-surat-dan-dokumen'), rotateArrow('surat-dan-dokumen')" id="surat-dan-dokumen" class="flex justify-between cursor-pointer">
                <span>Surat dan Dokumen</span>
                <img class="h-5 w-5" src="{{asset('assets/img/arrow.svg')}}">
              </div>

              <!-- dd surat dan dokumen -->
              <div id="dropdown-surat-dan-dokumen" class="pl-5 hidden sm:absolute sm:p-2 sm:bg-primary sm:rounded">
                  <ul>
                      <li class="my-5"><a href="/dokumen"><p>Surat</p></a></li>
                      <li class="my-5"><a href="/dokumen"><p>Dokumen</p></a></li>
                  </ul>
              </div>
          </div>

          <!-- anggaran -->
          <div class="my-5">
              <div onclick="toggleDropdown('dropdown-anggaran'), rotateArrow('anggaran')" id="anggaran" class="flex justify-between cursor-pointer">
                <span>Anggaran</span>
                <img class="h-5 w-5" src="{{asset('assets/img/arrow.svg')}}">
              </div>

              <!-- dd anggaran -->
              <div id="dropdown-anggaran" class="pl-5 hidden sm:absolute sm:p-2 sm:bg-primary sm:rounded">
                  <ul>
                      <li class="my-5"><a href="/anggaran"><p>Tahun 2020 - 2021</p></a></li>
                      <li class="my-5"><a href="/anggaran"><p>Tahun 2021 - 2022</p></a></li>
                      <li class="my-5"><a href="/anggaran"><p>Tahun 2022 - 2023</p></a></li>
                  </ul>
              </div>
          </div>

          <!-- news -->
          <div class="my-5">
            <a href="/berita"><span>News</span></a> 
          </div>

          <!-- Galery -->
          <div class="my-5">
            <a href="/galeri" class="my-5"><span>Galery</span></a>
          </div>

          <!-- Pengaduan -->
          <div class="my-5">
            <a href="/pengaduan" class="my-5"><span>Pengaduan</span></a>
          </div>
          
        </div>
    </nav>

    <style>
      .clip-polygon {
        clip-path: polygon(100% 10%, 60% 50%, 100% 100%, 0% 100%, 0% 10%);
      }
    </style>
  </header>