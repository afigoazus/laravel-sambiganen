@include("layouts.header")
<main class="mt-24 font-dusha sm:m-0">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80 sm:h-dvh sm:after:h-dvh">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Wringinanom</span> <br>
            <span class="text-4xl text-secondary">Kisahku</span>
        </div>
    </div>

    <!-- main section -->
    <section>
        <!-- organization icon -->
        <div class="bg-primary">
            <div class="p-4 flex justify-between mx-auto w-11/12 sm:justify-center sm:gap-36">
                <img class="w-20 bg-black rounded-lg cursor-pointer icon organization-icon hover:outline hover:outline-secondary hover:outline-4 hover:outline-offset-2 focus:outline focus:outline-secondary focus:outline-4 focus:outline-offset-2" slide-index="0" tabindex="0" src="{{asset('assets/img/karang-taruna-sm.png')}}" alt="">
                <img class="w-20 bg-black rounded-lg cursor-pointer icon organization-icon hover:outline hover:outline-secondary hover:outline-4 hover:outline-offset-2 focus:outline focus:outline-secondary focus:outline-4 focus:outline-offset-2" slide-index="1" tabindex="0" src="{{asset('assets/img/karang-taruna-sm.png')}}" alt="">
                <img class="w-20 bg-black rounded-lg cursor-pointer icon organization-icon hover:outline hover:outline-secondary hover:outline-4 hover:outline-offset-2 focus:outline focus:outline-secondary focus:outline-4 focus:outline-offset-2" slide-index="2" tabindex="0" src="{{asset('assets/img/karang-taruna-sm.png')}}" alt="">
                <img class="w-20 bg-black rounded-lg cursor-pointer icon organization-icon hover:outline hover:outline-secondary hover:outline-4 hover:outline-offset-2 focus:outline focus:outline-secondary focus:outline-4 focus:outline-offset-2" slide-index="3" tabindex="0" src="{{asset('assets/img/karang-taruna-sm.png')}}" alt="">
            </div>
        </div>
        <!-- organization icon end -->

        <div id="swiper-lembaga" class="swiper mx-auto w-11/12 my-10 text-white">
            <div id="swiper-wrapper" class="swiper-wrapper font-sans transition-transform duration-500">
                <!-- karang taruna description -->
                <div class="swiper-slide bg-primary rounded-lg h-auto">
                    <div class=" p-12">
                        <!-- title -->
                        <div class="font-bold mb-4 flex flex-col items-center">
                            <span>Karang Taruna</span>
                            <span>Anom Mekar Buana</span>
                        </div>
                        <!-- title end -->
            
                        <p class=" text-justify">
                        Karang Taruna Anom Mekar Buana adalah organisasi kepemudaan di Desa Wringinanom, Kecamatan Sambit, Kabupaten Ponorogo, 
                        yang berperan aktif dalam pemberdayaan pemuda dan pembangunan masyarakat.
                        Organisasi ini mengadakan berbagai kegiatan seperti pelatihan keterampilan, gotong royong, pelestarian seni budaya,
                        serta turnamen olahraga untuk mempererat solidaritas dan meningkatkan
                        kesejahteraan warga. Sebagai mitra pemerintah desa, Anom Mekar Buana
                        menjadi motor penggerak kemajuan melalui inovasi dan semangat kebersamaan.
                        </p>
                    </div>
                </div>
                <!-- karang taruna description end -->
                <!-- BPD description -->
                <div class="swiper-slide bg-turqoise rounded-lg h-auto">
                    <div class=" p-12">
                        <!-- title -->
                        <div class="font-bold mb-4 flex flex-col items-center">
                            <span>BPD</span>
                            <span>Desa Wringinanom</span>
                        </div>
                        <!-- title end -->
            
                        <p class=" text-justify">
                        Badan Permusyawaratan Desa (BPD) Wringinanom adalah lembaga perwakilan masyarakat yang berfungsi sebagai mitra pemerintah desa dalam menyusun kebijakan,
                        mengawasi pelaksanaan pembangunan, serta menampung dan menyalurkan aspirasi warga. BPD berperan aktif dalam mewujudkan tata kelola pemerintahan desa yang transparan, akuntabel,
                        dan partisipatif untuk mendukung tercapainya kesejahteraan masyarakat Desa Wringinanom.
                        </p>
                    </div>
                </div>
                <!-- BPD description end -->
                <!-- pkk description -->
                <div class="swiper-slide bg-cyan rounded-lg h-auto">
                    <div class=" p-12">
                        <!-- title -->
                        <div class="font-bold mb-4 flex flex-col items-center">
                            <span>PKK</span>
                            <span>Desa Wringinanom</span>
                        </div>
                        <!-- title end -->
            
                        <p class=" text-justify">
                        Pemberdayaan dan Kesejahteraan Keluarga (PKK) Desa Wringinanom merupakan gerakan yang bertujuan memberdayakan keluarga dalam berbagai bidang, seperti pendidikan, kesehatan,
                        dan ekonomi. Melalui 10 Program Pokok PKK, organisasi ini aktif mengadakan kegiatan seperti penyuluhan kesehatan, pelatihan keterampilan bagi ibu-ibu rumah tangga, hingga kegiatan sosial yang mempererat hubungan antarwarga. 
                        PKK menjadi mitra strategis pemerintah desa dalam membangun keluarga yang sejahtera dan mandiri.
                        </p>
                    </div>
                </div>
                <!-- pkk description end -->
                <!-- BUMDes description -->
                <div class="swiper-slide bg-lightBlue rounded-lg h-auto">
                    <div class=" p-12">
                        <!-- title -->
                        <div class="font-bold mb-4 flex flex-col items-center">
                            <span>BUMDes</span>
                            <span>Desa Wringinanom</span>
                        </div>
                        <!-- title end -->
            
                        <p class=" text-justify">
                        Badan Usaha Milik Desa (BUMDes) Wringinanom adalah lembaga ekonomi desa yang bertugas mengelola aset dan potensi lokal untuk meningkatkan pendapatan asli desa dan kesejahteraan masyarakat. 
                        BUMDes mengelola berbagai unit usaha, seperti jasa keuangan, perdagangan, dan pengelolaan sumber daya lokal. Sebagai penggerak ekonomi desa, BUMDes berkomitmen menghadirkan inovasi dan pemberdayaan ekonomi yang berkelanjutan bagi warga Desa Wringinanom
                        </p>
                    </div>
                </div>
                <!-- BUMDes description end -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
</main>
@include("layouts.footer")