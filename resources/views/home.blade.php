@include("layouts.header")
<main class="min-h-screen">
    <!-- Joglo Burammm -->
    <section class="relative h-[400px] md:h-[600px] mb-16 font-poppins">
        <img class="w-full h-full object-cover" src="{{asset('assets/img/img-breadcrumbs.png')}}" alt="joglo Wringinanom">

        <!-- Search Bar -->
        <div class="absolute bottom-16 left-1/2 -translate-x-1/2 flex flex-col items-center w-full space-y-8">
            <!-- Search Bar - Mobile -->
            <div class="relative w-11/12 max-w-md md:hidden animate-zoom">
                <div class="relative">
                    <input 
                        type="text"
                        class="w-full px-6 py-3 rounded-full border border-white/50 bg-black/30 text-white placeholder-white/80 focus:outline-none backdrop-blur-md"
                        placeholder="Search..."
                    >
                    <button class="absolute right-2 top-1/2 -translate-y-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Search Bar - Desktop -->
            <div class="hidden md:flex items-center w-11/12 max-w-md relative animate-zoom">
                <input 
                    type="text"
                    class="w-full px-6 py-4 rounded-full border-2 border-white bg-white/20 text-white placeholder-white focus:outline-none backdrop-blur-sm"
                    placeholder="Search..."
                >
                <button class="absolute -right-6 top-1/2 -translate-y-1/2 bg-turqoise p-4 rounded-full hover:bg-secondary transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        
            <!-- Social Links - Mobile -->
            <div class="flex justify-center gap-4 mt-4 md:hidden animate-zoom">
                <a href="#" class="hover:opacity-80 transition-opacity duration-300">
                    <img src="{{asset('assets/img/em.svg')}}" alt="email" class="w-8 h-8">
                </a>
                <a href="#" class="hover:opacity-80 transition-opacity duration-300">
                    <img src="{{asset('assets/img/ig.svg')}}" alt="instagram" class="w-8 h-8">
                </a>
                <a href="#" class="hover:opacity-80 transition-opacity duration-300">
                    <img src="{{asset('assets/img/tt.svg')}}" alt="tiktok" class="w-8 h-8">
                </a>
                <a href="#" class="hover:opacity-80 transition-opacity duration-300">
                    <img src="{{asset('assets/img/fb.svg')}}" alt="facebook" class="w-8 h-8">
                </a>
            </div>

            <!-- Social Links - Desktop -->
            <div class="hidden md:flex gap-6 animate-zoom">
                <a href="#" class="bg-white rounded-full p-3 w-14 h-14 flex items-center justify-center hover:bg-after transition-colors duration-300">
                    <img src="{{asset('assets/img/maildesk.png')}}" alt="email" class="w-8 h-8">
                </a>
                <a href="#" class="bg-white rounded-full p-3 w-14 h-14 flex items-center justify-center hover:bg-after transition-colors duration-300">
                    <img src="{{asset('assets/img/igdesk.png')}}" alt="instagram" class="w-8 h-8">
                </a>
                <a href="#" class="bg-white rounded-full p-3 w-14 h-14 flex items-center justify-center hover:bg-after transition-colors duration-300">
                    <img src="{{asset('assets/img/ttdesk.png')}}" alt="tiktok" class="w-8 h-8">
                </a>
                <a href="#" class="bg-white rounded-full p-3 w-14 h-14 flex items-center justify-center hover:bg-after transition-colors duration-300">
                    <img src="{{asset('assets/img/fbdesk.png')}}" alt="facebook" class="w-8 h-8">
                </a>
        </div>
    </section>

    <!-- Content -->
    <div class="container mx-auto px-4 space-y-16">
        <!-- Kisah kisah -->
        <section class="flex flex-row gap-8 md:hidden">
            <div class="w-1/2 space-y-4">
                <div class="space-y-2">
                    <h1 class="font-dusha text-3xl md:text-4xl text-primary">Wringinanom</h1>
                    <h2 class="font-dusha text-2xl md:text-3xl text-cyan">Kisahku</h2>
                </div>
                <p class="font-poppins text-sm md:text-base text-gray-700">
                    Desa Wringinanom adalah sebuah desa yang kaya akan kearifan lokal dan warisan budaya yang telah dilestarikan secara turun-temurun.
                </p>
                <button class="bg-yellow-300 hover:bg-yellow-400 text-black px-6 py-2 rounded-lg text-sm font-poppins transition">
                    Selengkapnya..
                </button>
            </div>
            <div class="w-1/2">
                <img src="{{asset('assets/img/kisah.png')}}" alt="Wringinanom" class="w-full rounded-lg object-cover"/>
            </div>
        </section>

        <!-- News -->
        <!-- Berita Terbaru - Desktop Only -->
        <section class="w-full hidden lg:block bg-white">
            <div class="container mx-auto px-24 py-12 max-w-[1400px]"> 
                <div class="flex items-center justify-center gap-16 mx-12"> 
                    <div class="w-1/2 space-y-6 max-w-xl pl-12"> 
                        <h2 class="text-primary text-2xl font-dusha">Berita Terbaru</h2>
                        <h3 class="font-poppins text-2xl font-bold leading-relaxed">
                            Kemeriahan Karnafal Mobil hias Desa Wringinanom memperingati HUT RI KE-79
                        </h3>
                        <div class="flex gap-3">
                            <span class="bg-primary text-white px-6 py-2 text-sm rounded font-ibm">Berita</span>
                            <span class="bg-primary text-white px-6 py-2 text-sm rounded font-ibm">Krajan</span>
                        </div>
                        <button class="bg-yellow text-white px-8 py-3 rounded font-poppins text-sm hover:opacity-90 transition-opacity">
                            Lihat semua berita>>>
                        </button>
                    </div>
                    <div class="w-1/2 max-w-xl pr-12">
                        <img 
                            src="{{asset('assets/img/truk.jpg')}}" 
                            alt="Karnafal" 
                            class="w-full h-[250px] object-cover rounded-lg shadow-lg"
                        />
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white relative">
            <!-- Desktop Layout -->
            <div class="w-full lg:px-0 px-4"> 
                <div class="hidden lg:block">
                    <div class="w-full bg-gradient-header">
                        <h2 class="font-dusha text-3xl text-white text-center py-4">News</h2>
                    </div>
                    
                    <div class="bg-skyblue py-8">
                        <div class="grid grid-cols-12 gap-4 px-4"> 
                            <div class="col-span-8">
                                <div class="bg-yellow h-[400px] rounded-lg"></div>
                            </div>
                            <div class="col-span-4 space-y-4">
                                <div class="bg-yellow h-[190px] rounded-lg"></div>
                                <div class="bg-yellow h-[190px] rounded-lg"></div>
                            </div>
                            <div class="col-span-4">
                                <div class="bg-yellow h-[190px] rounded-lg"></div>
                            </div>
                            <div class="col-span-4">
                                <div class="bg-yellow h-[190px] rounded-lg"></div>
                            </div>
                            <div class="col-span-4">
                                <div class="bg-yellow h-[190px] rounded-lg"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Layout -->
                <div class="lg:hidden grid grid-cols-1 md:grid-cols-2 gap-4">
                    <h2 class="font-dusha text-3xl text-primary text-center mb-12">News</h2>
                    <article class="rounded-lg overflow-hidden shadow-lg bg-white">
                        <div class="relative">
                            <img src="{{asset('assets/img/mbake.png')}}" alt="Karnafal" class="w-full h-48 object-cover"/>
                            <div class="absolute bottom-0 left-0 p-4 flex gap-2">
                                <span class="bg-yellowCustom text-darkGray px-2 py-1 rounded text-sm">Berita</span>
                                <span class="bg-yellowCustom text-darkGray px-2 py-1 rounded text-sm">Krajan</span>
                            </div>
                        </div>
                        <div class="p-4 text-left space-y-4">
                            <h3 class="font-poppins font-bold text-lg">Kemeriahan Karnafal Mobil Hias</h3>
                            <p class="font-ibm text-darkGray">Description</p>
                            <button class="font-ibm border border-darkGray text-darkGray hover:bg-gray-100 px-4 py-2 rounded transition">
                                Selengkapnya
                            </button>
                        </div>
                    </article>
                </div>

                <div class="lg:hidden text-center mt-8">
                    <button class="bg-red-400 hover:bg-red-500 text-white px-8 py-2 rounded-lg font-poppins transition">
                        Lihat semua berita
                    </button>
                </div>
            </div>
        </section>



        <!-- Komen/Timbal Balik -->
        <section class="w-11/12 max-w-screen-xl mx-auto mt-16 px-4 md:hidden">
            <div class="flex items-start sm:items-center sm:justify-center gap-4">
                <h2 class="text-xl font-dusha font-bold text-black">Ada Yang Ingin<br>Di Sampaikan</h2>
                <a href="#" class="bg-yellow text-white py-2 px-4 rounded-lg">Kirim di sini</a>
            </div>
        </section>


        <!-- Agenda Kreasi-->
        <section class="w-11/12 mx-auto mt-16">
            <!-- Mobile Version -->
            <div class="block md:hidden">
                <h2 class="text-3xl font-dusha text-primary mb-8 text-center">Agenda Kreasi</h2>
                <div class="grid grid-cols-1 gap-8 justify-center">
                    <div class="text-center">
                        <img src="{{asset('assets/img/seni.png')}}" alt="Kesenian" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover"/>
                        <button class="bg-red-400 text-white px-6 py-2 rounded-lg">
                        Kesenian
                        </button>
                    </div>
                    <div class="text-center">
                        <img src="{{asset('assets/img/industri.png')}}" alt="Industri" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover"/>
                        <button class="bg-red-400 text-white px-6 py-2 rounded-lg">
                        Industri
                        </button>
                    </div>
                </div>
            </div>
            <!-- Desktop Version -->
            <div class="hidden md:block">
                <div class="relative">
                    <div class="bg-primary rounded-lg p-8">
                        <h2 class="text-4xl font-dusha text-white mb-12 text-center">Agenda Kreasi</h2>
                        <div class="grid grid-cols-[auto_1fr_auto] gap-8 items-center px-8">
                            <h3 class="text-2xl font-dusha text-white text-right">Kesenian</h3>
                            <div class="grid grid-cols-2 gap-16">
                                <div class="bg-white rounded-lg p-4 min-h-[200px] flex items-center justify-center"></div>
                                <div class="bg-white rounded-lg p-4 min-h-[200px] flex items-center justify-center"></div>
                            </div>
                            <h3 class="text-2xl font-dusha text-white text-left">Industri</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lembaga -->
        <section class="w-11/12 mx-auto mt-16 text-center">
            <h2 class="text-3xl font-dusha text-primary mb-8">Lembaga Yang Ada Di Desa Wringinanom</h2>
            <!-- Mobile-->
            <div class="grid grid-cols-2 md:hidden gap-8 justify-center">
                <div class="text-center">
                    <img src="{{asset('assets/img/Katar.png')}}" alt="Karang Taruna" class="w-32 h-32 mx-auto rounded-full mb-4"/>
                    <h3 class="font-bold mb-2">Karang Taruna</h3>
                    <button class="bg-red-400 text-white px-4 py-1 rounded-lg text-sm">More</button>
                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/pkk.png')}}" alt="PKK" class="w-32 h-32 mx-auto rounded-full mb-4"/>
                    <h3 class="font-bold mb-2">PKK</h3>
                    <button class="bg-red-400 text-white px-4 py-1 rounded-lg text-sm">More</button>
                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/pkk.png')}}" alt="BPD" class="w-32 h-32 mx-auto rounded-full mb-4"/>
                    <h3 class="font-bold mb-2">BPD</h3>
                    <button class="bg-red-400 text-white px-4 py-1 rounded-lg text-sm">More</button>
                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/pkk.png')}}" alt="BUMDes" class="w-32 h-32 mx-auto rounded-full mb-4"/>
                    <h3 class="font-bold mb-2">BUMDes</h3>
                    <button class="bg-red-400 text-white px-4 py-1 rounded-lg text-sm">More</button>
                </div>
            </div>

            <!-- Desktop View -->
            <div class="hidden md:flex flex-wrap justify-center gap-8">
                <div class="flex flex-col items-center">
                    <div class="bg-primary w-40 h-40 flex items-center justify-center text-black font-bold rounded-lg"> </div>
                    <p class="mt-2 font-bold">Karang Taruna</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-cyan w-40 h-40 flex items-center justify-center text-black font-bold rounded-lg"> </div>
                    <p class="mt-2 font-bold">PKK</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-primary w-40 h-40 flex items-center justify-center text-black font-bold rounded-lg"> </div>
                    <p class="mt-2 font-bold">BPD</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-cyan w-40 h-40 flex items-center justify-center text-black font-bold rounded-lg"> </div>
                    <p class="mt-2 font-bold">BUMDes</p>
                </div>
            </div>
        </section>

        <!-- Unduh Dokumen -->
        <section class="w-full px-0">
            <!-- MOBILE -->
            <div class="flex items-start sm:items-center sm:justify-center gap-4 md:hidden">
                <h2 class="text-xl font-dusha font-bold text-black">Unduh Dokumen<br>Atau Surat</h2>
                <a href="#" class="bg-yellow text-black py-2 px-4 rounded-lg">Klik di sini</a>
            </div>
            <!-- DESKT -->
            <div class="hidden md:flex bg-yellow w-full py-6 flex-row justify-center items-center text-white mb-0">
                <div class="flex items-center gap-4">
                    <p class="font-bold text-left">Ada yang <br> Ingin Disampaikan?</p>
                    <div class="bg-white p-3 rounded-lg">
                        <img src="{{asset('assets/img/inbox.png')}}" alt="Email Icon" class="w-12 h-12"/>
                    </div>
                </div>
                <div class="flex items-center gap-4 ml-8">
                    <p class="font-bold text-left">Unduh Dokumen <br> atau Surat!</p> 
                    <div class="bg-white p-3 rounded-lg">
                        <img src="{{asset('assets/img/up.png')}}" alt="Upload Icon" class="w-12 h-12"/>
                    </div>
                </div>
            </div>
        </section>

        <!-- Demographics mobile -->
        <section class="text-center space-y-6 md:hidden">
            <h2 class="font-dusha text-2xl text-primary">Demografis</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="space-y-2">
                    <h3 class="font-dusha text-5xl text-black">4</h3>
                    <p class="font-dusha text-sm text-primary uppercase">DUSUN</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-5xl font-dusha text-black">9</h3>
                    <p class="text-sm font-dusha text-primary uppercase">RUKUN WARGA</p>   
                </div>
                <div class="space-y-2">
                    <h3 class="text-5xl font-dusha text-black">39</h3>
                    <p class="text-sm font-dusha text-primary uppercase">RUKUN TETANGGA</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-5xl font-dusha text-black">5212</h3>
                    <p class="text-sm font-dusha text-primary uppercase">JIWA</p>   
                </div>
            </div>
        </section>

        <!-- Demographics Desk -->
        <section class="text-center hidden md:block w-full mt-0">
            <div class="bg-gradient-header text-white py-3 rounded-t-lg">
                <h2 class="font-dusha text-2xl">Demografis dan Geografis</h2>
            </div>
            <div class="bg-white py-6 px-4 rounded-b-lg">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 items-center justify-center">
                    <!-- Dusun -->
                    <div class="flex flex-col items-center space-y-2">
                        <div class="w-20 h-20 md:w-24 md:h-24 flex items-center justify-center bg-primary text-white font-dusha text-4xl md:text-5xl rounded-full shadow-lg">
                            4
                        </div>
                        <p class="font-dusha text-sm text-black">Dusun</p>
                    </div>

                    <!-- Rukun Warga -->
                    <div class="flex flex-col items-center space-y-2">
                        <div class="w-20 h-20 md:w-24 md:h-24 flex items-center justify-center bg-primary text-white font-dusha text-4xl md:text-5xl rounded-full shadow-lg">
                            9
                        </div>
                        <p class="font-dusha text-sm text-black">Rukun Warga</p>
                    </div>

                    <!-- Rukun Tetangga -->
                    <div class="flex flex-col items-center space-y-2">
                        <div class="w-20 h-20 md:w-24 md:h-24 flex items-center justify-center bg-primary text-white font-dusha text-4xl md:text-5xl rounded-full shadow-lg">
                            39
                        </div>
                        <p class="font-dusha text-sm text-black">Rukun Tetangga</p>
                    </div>

                    <!-- Jiwa -->
                    <div class="flex flex-col items-center space-y-2">
                        <div class="w-20 h-20 md:w-24 md:h-24 flex items-center justify-center bg-primary text-white font-dusha text-4xl md:text-5xl rounded-full shadow-lg">
                            5212
                        </div>
                        <p class="font-dusha text-sm text-black">Jiwa</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Geographic -->
        <section class="text-center space-y-6">
            <h2 class="font-dusha text-2xl text-cyan-700 lg:hidden">Geografis</h2>
            <div class="w-full h-[400px] rounded-lg overflow-hidden shadow-lg">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=BELUM_MINTAA_URL"
                    class="w-full h-full"
                    style="border:0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </div>
</main>
@include("layouts.footer")