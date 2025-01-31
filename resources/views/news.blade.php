@include("layouts.header")
<main class="font-dusha mt-24">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10 text-4xl">
            <span class="text-primary"> Anggaran <br> <span class="text-secondary">Desa</span></span> <br>
            <span class="text-primary">Wringinanom</span>
        </div>
    </div>

    <!-- news section -->
    <section class="w-11/12 mx-auto my-4">
        <div class="my-4">
            <span class="py-1 px-4 bg-primary rounded-md text-white">Berita</span>
        </div>
        <div class="grid gap-4 grid-cols-1">
            <!-- news -->
            <div class="p-4 w-11/12 mx-auto shadow-lg relative">
                <img src="{{ asset('assets/img/img-breadcrumbs.png')}}" alt="" class="rounded-2xl w-auto">
                <div class="flex gap-2 absolute bottom-40 left-6">
                    <!-- kategori -->
                    <span class="py-1 px-4 rounded bg-[#FDFCDC]">Berita</span>
                    <!-- dusun -->
                    <span class="py-1 px-4 rounded bg-[#FDFCDC]">Krajan</span>
                </div>

                <!-- news title -->
                <p class="my-2">Kemeriahan Karnafal Mobil Hias Desa Wringinanom Memperingati HUT RI Ke-79</p>

                <!-- description -->
                <p class="my-2">Description</p>

                <a href="#"><p class="border-[#DBE2EA] border-2 rounded-md p-2 text-[#7C9CBF] inline-block">Selengkapnya</p></a>
            </div>
            <!-- news end -->

            <!-- news -->
            <div class="p-4 w-11/12 mx-auto shadow-lg relative">
                <img src="{{ asset('assets/img/img-breadcrumbs.png')}}" alt="" class="rounded-2xl w-auto">
                <div class="flex gap-2 absolute bottom-40 left-6">
                    <!-- kategori -->
                    <span class="py-1 px-4 rounded bg-[#FDFCDC]">Berita</span>
                    <!-- dusun -->
                    <span class="py-1 px-4 rounded bg-[#FDFCDC]">Krajan</span>
                </div>

                <!-- news title -->
                <p class="my-2">Kemeriahan Karnafal Mobil Hias Desa Wringinanom Memperingati HUT RI Ke-79</p>

                <!-- description -->
                <p class="my-2">Description</p>

                <a href="#"><p class="border-[#DBE2EA] border-2 rounded-md p-2 text-[#7C9CBF] inline-block">Selengkapnya</p></a>
            </div>
            <!-- news end -->
        </div>
    </section>

</main>
@include("layouts.footer")