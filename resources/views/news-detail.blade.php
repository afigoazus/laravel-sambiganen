@include("layouts.header")
<main class="font-dusha mt-24 container mx-auto">
    <section class="w-11/12 mx-auto py-10 lg:grid lg:grid-cols-[3fr_1fr] gap-5 space-y-8">
        <!-- Main -->
        <div class="space-y-8">
            <!-- Header berita -->
            <div class="space-y-4">
                <div class="rounded-2xl overflow-hidden relative">
                    <img src="/assets/img/mbake.png" class="w-full h-auto max-h-[250px] object-cover" alt="">

                    <!-- category -->
                    <div class="absolute bottom-2 left-2 flex gap-3">
                        <!-- kategori -->
                        <span class="py-1 px-4 rounded bg-[#FDFCDC]">Berita</span>
                        <!-- dusun -->
                        <span class="py-1 px-4 rounded bg-[#FDFCDC]">Krajan</span>
                    </div>
                </div>

                <h1 class="text-center font-poppins text-xl md:text-2xl font-semibold">Kemeriahan Karnafal Mobil hias
                    Desa Wringinanom memperingati HUT RI KE-79</h1>
            </div>

            <!-- Content berita -->
            <div class="font-poppins text-sm md:text-base text-justify space-y-4 text-[#2C2738]">
                <p>Hari ini, Desa Wringinanom dipenuhi semangat kemerdekaan yang membara! 🌟 Karnaval mobil hias yang
                    penuh warna dan kreativitas melintasi jalan-jalan desa, menjadi lambang kegembiraan dan penghormatan
                    atas perjuangan para pahlawan bangsa.</p>
                <p>Dengan tema "Semangat Kemerdekaan, Harmoni Kebhinekaan," setiap mobil hias menceritakan kisah tentang
                    Indonesia—dari keindahan alam, kekayaan budaya, hingga semangat gotong royong. Iringan musik
                    tradisional, pakaian adat, dan dekorasi yang memukau membawa kita merasakan kebanggaan menjadi
                    bagian dari bangsa yang besar.</p>
                <p>🎉 Jangan lewatkan parade unik ini! Saksikan keindahan seni dan kreativitas warga Desa Wringinanom
                    yang bersatu dalam semangat memperingati HUT RI ke-79. Mari kita terus menjaga persatuan dan
                    merayakan kebhinekaan dengan penuh cinta tanah air! ❤️🇮🇩</p>
            </div>
        </div>

        <div class="font-poppins space-y-4">
            <div class="border-b-[6px] border-[#0081a7]">
                <p class="px-4 py-2 text-white bg-primary rounded-tr-lg w-fit text-right font-medium">Berita Populer</p>
            </div>

            <div class="border-b-[3px] border-[#0081a7] pb-4 space-y-4">
                <div>
                    <img src="/assets/img/mbake.png" class="w-full h-auto max-h-[200px] object-cover" alt="">
                </div>

                <p class="font-bold">Kemeriahan Karnafal Mobil hias Desa Wringinanom
                    memperingati HUT RI KE-79</p>
            </div>

            <div class="border-b-[3px] border-[#0081a7] pb-4">
                <p class="font-bold">Kemeriahan Karnafal Mobil hias Desa Wringinanom
                    memperingati HUT RI KE-79</p>
            </div>

            <div class="border-b-[3px] border-[#0081a7] pb-4">
                <p class="font-bold">Kemeriahan Karnafal Mobil hias Desa Wringinanom
                    memperingati HUT RI KE-79</p>
            </div>

            <div class="border-b-[3px] border-[#0081a7] pb-4">
                <p class="font-bold">Kemeriahan Karnafal Mobil hias Desa Wringinanom
                    memperingati HUT RI KE-79</p>
            </div>
        </div>
    </section>
</main>
@include("layouts.footer")