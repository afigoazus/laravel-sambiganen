<footer class="bg-primary">
    <div class="container mx-auto w-11/12 py-4 text-white lg:flex lg:px-4 lg:justify-center lg:gap-20 lg:items-center">
        <div class="flex justify-between font-dusha lg:flex-col lg:justify-normal lg:gap-5 lg:flex-1 lg:max-w-[375px]">
            <!-- LEFT SIDE -->
            <div class="flex gap-2">
                <img class="h-16 w-16 lg:h-24 lg:w-24" src="{{asset('assets/img/logo.svg')}}" alt="logo ponorogo">
                <div class="flex flex-col justify-center lg:gap-2">
                    <h1 class="text-lg lg:text-3xl">Desa Wringinanom</h1>
                    <div>
                        <p class="text-sm leading-4">Kec. Sambit, Kab. Ponorogo <br /> Jawa Timur</p>
                    </div>
                </div>
            </div>

            <!-- LAPOR KANG -->
            <input class="hidden lg:block font-dusha px-4 py-2 rounded-xl border-none outline-none placeholder:text-white placeholder:opacity-100 bg-white/50" type="text" placeholder="Lapor kang...">

            <!-- RIGHT SIDE -->
            <div class="flex justify-between items-center gap-4">
                <img class="lg:w-8 lg:h-8" src="{{asset('assets/img/em.svg')}}" alt="email logo">
                <img class="lg:w-8 lg:h-8" src="{{asset('assets/img/ig.svg')}}" alt="instagram logo">
                <img class="lg:w-8 lg:h-8" src="{{asset('assets/img/tt.svg')}}" alt="tiktok logo">
                <img class="lg:w-8 lg:h-8" src="{{asset('assets/img/fb.svg')}}" alt="facebook logo">
            </div>
        </div>

        <!-- BOTTOM SIDE -->
        <div class="flex flex-col gap-4 mt-4 lg:flex-1 lg:max-w-[375px] font-poppins">
            <!-- UPPER SIDE -->
            <div class="flex justify-between lg:gap-16">
                <div>
                    <h3 class="text-lg font-semibold mb-2">Profil</h3>
                    <p class="text-sm">Sejarah</p>
                    <p class="text-sm">Struktur</p>
                    <p class="text-sm">Lembaga Desa</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Anggaran</h3>
                    <p class="text-sm">Tahun 2023</p>
                    <p class="text-sm">Tahun 2024</p>
                </div>
            </div>
            <!-- LOWER SIDE -->
            <div class="flex justify-between lg:gap-16">
                <div>
                    <h3 class="text-lg font-semibold mb-2">Surat dan Dokumen</h3>
                    <p class="text-sm">Kehilangan</p>
                    <p class="text-sm">Keterangan Tidak Mampu</p>
                    <p class="text-sm">Lembaga Desa</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2 w-20">Berita</h3>
                </div>
            </div>
        </div>
        
        <!-- kontak dan alamat -->
        <div class="flex flex-col gap-4">
            <!-- Kontak -->
            <div class="font-poppins">
                <p class="font-medium text-lg my-2 lg:mt-0 lg:mb-2">Kontak</p>
                <!-- logo email -->
                <div class="flex gap-4 mb-4">
                    <img src="{{ asset('assets/img/email.svg')}}" alt="email.svg" class=" bg-white w-8 rounded p-1">
                    <p class="font-medium outline outline-2 outline-white p-1 rounded">wringinanomp@gmail.com</p>
                </div>   
                
                <!-- logo telepon -->
                <div class="flex gap-4 mb-4">
                    <img src="{{ asset('assets/img/phone.svg')}}" alt="phone.svg" class="bg-white w-8 rounded p-1">
                    <p class="font-medium outline outline-2 outline-white p-1 rounded">(0352) 312896</p>
                </div> 
            </div>

            <!-- alamat -->
            <div class="font-poppins">
                <p class="font-medium text-lg my-2">Alamat</p>
                <p>Jalan Kresno Nomor 41, Desa Wringinanom,</p>
                <p>Kecamatan Sambit, Kabupaten Ponorogo</p>
            </div>
        </div>

        

        <!-- LAPOR KANG -->
        <div class="mt-4 flex justify-center lg:hidden">
        <input class="w-9/12 max-w-[400px] font-dusha px-4 py-2 rounded-xl border-none outline-none placeholder:text-white placeholder:opacity-100 bg-white/50 lg:w-full lg:max-w-full" type="text" placeholder="Lapor kang...">
        </div>
    </div>
    
    <!-- watermark -->
    <p class="font-poppins font-medium text-white text-center py-4">Copyright 2025 - Arcanum Code</p>
</footer>
</body>

</html>