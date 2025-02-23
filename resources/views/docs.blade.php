@include("layouts.header")
<main class="mt-24 font-dusha">
    <div
        class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Persyaratan <span class="text-secondary">dan</span></span> <br>
            <span class="text-4xl text-primary">Surat - Surat</span>
        </div>
    </div>

    <!-- menu button -->
    <section class="w-11/12 mx-auto mt-8">
        <!-- menu navigation -->
        <div class="flex gap-6 mb-2 text-xl">
            <button id="persyaratanButton" class="bg-primary p-2 rounded-xl text-white">Persyaratan</button>
            <button id="suratButton" class="bg-[#A2A2A2] p-2 rounded-xl">Surat-Surat</button>
            <button id="dokumenButton" class="bg-[#A2A2A2] p-2 rounded-xl" >Dokumen</button>
        </div>
        <!-- menu navigation end -->

    </section>
    <!-- menu button end -->

    <!-- persyaratan section -->
    <section id="persyaratanContent" class="w-11/12 mx-auto my-8">
        <!-- title -->
        <div class=" text-xl">
            <p>Persyaratan yang harus disiapkan</p>
            <p>pada saat mengajukan surat-surat</p>
        </div>
        <!-- title end -->
        <!-- content section -->
        <div class="font-poppins font-medium text-lg grid grid-cols-1 sm:grid-cols-2">
            <div>
                <!-- surat keterangan usaha -->
                <div class="bg-slate-50 my-5 rounded-xl w-4/5 mx-auto">
                    <p class="bg-secondary text-white p-1 rounded-t-lg w-auto">Surat Keterangan Usaha</p>
                </div>
                <p class="text-center">Ktp dan Kartu Keluarga</p>
            </div>
            <!-- surat keterangan usaha end -->

            <!-- surat BBM -->
            <div class="bg-slate-50 my-5 rounded-xl w-4/5 mx-auto">
                <p class="bg-secondary text-white p-1 rounded-t-lg w-auto">Surat BBM</p>
                <p class="text-center">Ktp dan Kartu Keluarga</p>
            </div>
            <!-- surat BBM end -->

            <!-- surat keringanan sekolah -->
            <div class="bg-slate-50 my-5 rounded-xl w-4/5 mx-auto">
                <p class="bg-secondary text-white p-1 rounded-t-lg w-auto">Surat Keringanan Sekolah</p>
                <p class="text-center">Ktp dan Kartu Keluarga</p>
            </div>
            <!-- surat keringanan sekolah end -->

            <!-- surat perpindahan penduduk -->
            <div class="bg-slate-50 my-5 rounded-xl w-4/5 mx-auto">
                <p class="bg-secondary text-white p-1 rounded-t-lg w-auto">Surat Perpindahan Penduduk</p>
                <p class="text-center">Ktp dan Kartu Keluarga Pemohon</p>
            </div>
            <!-- surat perpindahan penduduk end -->

            <!-- surat kematian -->
            <div class="bg-slate-50 my-5 rounded-xl w-4/5 mx-auto">
                <p class="bg-secondary text-white p-1 rounded-t-lg w-auto">Surat Kematian</p>
                <ul class="w-4/5 mx-auto space-y-1">
                    <li>
                        <i class="fa-solid fa-caret-up fa-rotate-90" style="color: #0081a7;"></i>
                        Kartu Keluarga orang yang meninggal
                    </li>
                    <li>
                        <i class="fa-solid fa-caret-up fa-rotate-90" style="color: #0081a7;"></i>
                        2 KTP Saksi
                    </li>
                    <li>
                        <i class="fa-solid fa-caret-up fa-rotate-90" style="color: #0081a7;"></i>
                        1 KTP Pelapor
                    </li>
                </ul>
            </div>
            <!-- surat kematian end -->

            <!-- surat kelahiran -->
            <div class="bg-slate-50 my-5 rounded-xl w-4/5 mx-auto">
                <p class="bg-secondary text-white p-1 rounded-t-lg w-auto">Surat Kelahiran</p>
                <ul class="w-4/5 mx-auto space-y-1">
                    <li>
                        <i class="fa-solid fa-caret-up fa-rotate-90" style="color: #0081a7;"></i>
                        Kartu Keluarga orang tua
                    </li>
                    <li>
                        <i class="fa-solid fa-caret-up fa-rotate-90" style="color: #0081a7;"></i>
                        2 KTP Saksi
                    </li>
                    <li>
                        <i class="fa-solid fa-caret-up fa-rotate-90" style="color: #0081a7;"></i>
                        1 KTP Pelapor
                    </li>
                    <li>
                        <i class="fa-solid fa-caret-up fa-rotate-90" style="color: #0081a7;"></i>
                        Surat Keterangan Dari Dokter/Bidan
                    </li>
                </ul>
            </div>
            <!-- surat kelahiran end -->
        </div>
        
    </section>
    <!-- persayaratan section end -->

    <!-- surat-surat section -->
    <section id="suratContent" class="w-11/12 mx-auto my-20 text-white font-poppins font-medium grid grid-cols-2 sm:grid-cols-4 gap-6 hidden">
        <div class="bg-primary rounded-2xl h-auto cursor-pointer">
            <a class="flex flex-col items-center gap-4 p-10 text-center" href="/dokumen/keterangan-usaha">
                <img class="w-32" src="{{asset('assets/img/form.png')}}" alt="">
                <p>Surat Keterangan Usaha</p>
            </a>
        </div>
        <div class="bg-secondary rounded-2xl h-auto cursor-pointer">
            <a class="flex flex-col items-center gap-4 p-10 text-center" href="/dokumen/bbm">
                <img class="w-32" src="{{asset('assets/img/form.png')}}" alt="">
                <p>Surat BBM</p>
            </a>
        </div>
        <div class="bg-primary rounded-2xl h-auto cursor-pointer">
            <a class="flex flex-col items-center gap-4 p-10 text-center" href="/dokumen/keringanan-sekolah">
                <img class="w-32" src="{{asset('assets/img/form.png')}}" alt="">
                <p>Surat Keringanan Sekolah</p>
            </a>
        </div>
        <div class="bg-secondary rounded-2xl h-auto cursor-pointer">
            <a class="flex flex-col items-center gap-4 p-10 text-center" href="/dokumen/perpindahan-penduduk">
                <img class="w-32" src="{{asset('assets/img/form.png')}}" alt="">
                <p>Surat Perpindahan Penduduk</p>
            </a>
        </div>
        <div class="bg-secondary rounded-2xl h-auto cursor-pointer">
            <a class="flex flex-col items-center gap-4 p-10 text-center" href="/dokumen/kematian-minimal">
                <img class="w-32" src="{{asset('assets/img/form.png')}}" alt="">
                <p>Surat Kematian Minimal</p>
            </a>
        </div>
        <div class="bg-primary rounded-2xl h-auto cursor-pointer">
            <a class="flex flex-col items-center gap-4 p-10 text-center" href="/dokumen/kematian-nkri">
                <img class="w-32" src="{{asset('assets/img/form.png')}}" alt="">
                <p>Surat Kematian NKRI</p>
            </a>
        </div>
        <div class="bg-secondary rounded-2xl h-auto cursor-pointer">
            <a class="flex flex-col items-center gap-4 p-10 text-center" href="/dokumen/kelahiran">
                <img class="w-32" src="{{asset('assets/img/form.png')}}" alt="">
                <p>Surat Kelahiran</p>
            </a>
        </div>
        <div class="bg-primary rounded-2xl h-auto cursor-pointer">
            <a class="flex flex-col items-center gap-4 p-10 text-center" href="/dokumen/kehilangan">
                <img class="w-32" src="{{asset('assets/img/form.png')}}" alt="">
                <p>Surat Kehilangan</p>
            </a>
        </div>
    </section>
    <!-- surat-surat end -->

    <!-- dokumen -->
    <section id="dokumenContent" class="w-11/12 mx-auto my-20 hidden">
        <!-- dokumen swiper -->
        <div id="swiper-dokumen" class="swiper">
            <div class="swiper-wrapper font-poppins font-medium text-white">
                <div class="swiper-slide bg-primary rounded-2xl h-auto cursor-pointer">
                    <a class="flex flex-col items-center gap-4 p-10 text-center" href="#">
                        <img class="w-28" src="{{asset('assets/img/pdf-icon.png')}}" alt="">
                        <p>Realisasi APBDes Tahun Anggaran 2023</p>
                    </a>
                </div>
                <div class="swiper-slide bg-primary rounded-2xl h-auto cursor-pointer">
                    <a class="flex flex-col items-center gap-4 p-10 text-center" href="#">
                        <img class="w-28" src="{{asset('assets/img/pdf-icon.png')}}" alt="">
                        <p>Realisasi APBDes Tahun Anggaran 2024</p>
                    </a>
                </div>
                <div class="swiper-slide bg-primary rounded-2xl h-auto cursor-pointer">
                    <a class="flex flex-col items-center gap-4 p-10 text-center" href="#">
                        <img class="w-28" src="{{asset('assets/img/pdf-icon.png')}}" alt="">
                        <p>Realisasi APBDes Tahun Anggaran 2025</p>
                    </a>
                </div>    
            </div>
            <div class="swiper-pagination relative mt-4"></div>
        </div>
        <!-- dokument swiper end -->
    </section>
</main>
@include("layouts.footer")