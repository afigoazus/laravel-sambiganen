@include("layouts.header")
<main class="min-h-screen">
    <!-- Joglo Burammm -->
    <section class="relative h-[400px] mb-16">
        
        <img class="w-full h-full object-cover" src="{{asset('assets/img/img-breadcrumbs.png')}}" alt="joglo Wringinanom">
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex flex-col items-center w-full space-y-4">
            <!-- Search Bar -->
            <div class="relative w-11/12 max-w-md">
                <input class="w-full px-4 py-2 pr-10 rounded-full border border-white bg-white/30 text-white placeholder-white focus:outline-none"/>
                <button class="absolute right-6 top-1/2 -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>
                    </svg>
                </button>
            </div>
            <!-- Social Links -->
            <div class="flex gap-4">
                <a href="#" class="p-3 flex items-center justify-center w-12 h-12 transition hover:opacity-80">
                    <img src="{{asset('assets/img/em.svg')}}" alt="email" class="w-8 h-8"/>
                </a>
                <a href="#" class="p-3 flex items-center justify-center w-12 h-12 transition hover:opacity-80">
                    <img src="{{asset('assets/img/ig.svg')}}" alt="instagram" class="w-8 h-8"/>
                </a>
                <a href="#" class="p-3 flex items-center justify-center w-12 h-12 transition hover:opacity-80">
                    <img src="{{asset('assets/img/tt.svg')}}" alt="tiktok" class="w-8 h-8"/>
                </a>
                <a href="#" class="p-3 flex items-center justify-center w-12 h-12 transition hover:opacity-80">
                    <img src="{{asset('assets/img/fb.svg')}}" alt="facebook" class="w-8 h-8"/>
                </a>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div class="container mx-auto px-4 space-y-16">
        <!-- Kisah kisah -->
        <section class="flex flex-row gap-8">
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
        <section class="text-center space-y-8">
            <h2 class="font-dusha text-3xl text-primary">NEWS</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
                <article class="rounded-lg overflow-hidden shadow-lg bg-white">
                    <div class="relative">
                        <img src="{{asset('assets/img/mbake.png')}}" alt="Karnafal" class="w-full h-48 object-cover"/>
                        <div class="absolute bottom-0 left-0 p-4 flex gap-2">
                            <span class="bg-[#FDFCDC] text-black px-2 py-1 rounded text-sm">Berita</span>
                            <span class="bg-[#FDFCDC] text-black px-2 py-1 rounded text-sm">Krajan</span>
                        </div>
                    </div>
                    <div class="p-4 text-left space-y-4">
                        <h3 class="font-poppins font-bold text-lg">Kemeriahan Karnafal Mobil Hias Desa Wringinanom memperingati HUT RI KE-79</h3>
                        <p class="font-ibm text-gray-600">Description</p>
                        <button class="font-ibm border border-gray-500 text-gray-500 hover:bg-gray-100 px-4 py-2 rounded transition">
                            Selengkapnya
                        </button>
                    </div>
                </article>
            </div>
            <button class="bg-red-400 hover:bg-red-500 text-white px-8 py-2 rounded-lg font-poppins transition">
                Lihat semua berita
            </button>
        </section>



        <!-- Komen/Timbal Balik -->
        <section class="w-11/12 max-w-screen-xl mx-auto mt-16 px-4">
            <div class="flex items-start sm:items-center sm:justify-center gap-4">
                <h2 class="text-xl font-dusha font-bold text-black">Ada Yang Ingin<br>Di Sampaikan</h2>
                <a href="#" class="bg-yellow-300 text-black py-2 px-4 rounded-lg">Kirim di sini</a>
            </div>
        </section>


        <!-- Agenda Kreasi-->
        <section class="w-11/12 mx-auto mt-16 text-center">
            <h2 class="text-3xl font-dusha text-primary mb-8">Agenda Kreasi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center">
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
        </section>

        <!-- Lembaga -->
        <section class="w-11/12 mx-auto mt-16 text-center">
            <h2 class="text-3xl font-dusha text-primary mb-8">Lembaga Yang Ada Di Desa Wringinanom</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 justify-center">
                <div class="text-center">
                    <img src="{{asset('assets/img/Katar.png')}}" alt="Karang Taruna" class="w-32 h-32 mx-auto rounded-full mb-4"/>
                    <h3 class="font-bold mb-2">Karang Taruna</h3>
                    <button class="bg-red-400 text-white px-4 py-1 rounded-lg text-sm">
                        More
                    </button>
                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/pkk.png')}}" alt="PKK" class="w-32 h-32 mx-auto rounded-full mb-4"/>
                    <h3 class="font-bold mb-2">PKK</h3>
                    <button class="bg-red-400 text-white px-4 py-1 rounded-lg text-sm">
                        More
                    </button>
                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/pkk.png')}}" alt="BPD" class="w-32 h-32 mx-auto rounded-full mb-4"/>
                    <h3 class="font-bold mb-2">BPD</h3>
                    <button class="bg-red-400 text-white px-4 py-1 rounded-lg text-sm">
                        More
                    </button>
                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/pkk.png')}}" alt="BUMDes" class="w-32 h-32 mx-auto rounded-full mb-4"/>
                    <h3 class="font-bold mb-2">BUMDes</h3>
                    <button class="bg-red-400 text-white px-4 py-1 rounded-lg text-sm">
                        More
                    </button>
                </div>
            </div>
        </section>

        <!-- Unduh Dokumen -->
        <section class="w-11/12 max-w-screen-xl mx-auto mt-16 px-4">
            <div class="flex items-start sm:items-center sm:justify-center gap-4">
                <h2 class="text-xl font-dusha font-bold text-black">Unduh Dokumen<br>Atau Surat</h2>
                <a href="#" class="bg-yellow-300 text-black py-2 px-4 rounded-lg">Klik di sini</a>
            </div>
        </section>

        <!-- Demographics -->
        <section class="text-center space-y-6">
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

        <!-- Geographic -->
        <section class="text-center space-y-6">
            <h2 class="font-dusha text-2xl text-cyan-700">Geografis</h2>
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