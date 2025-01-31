@include("layouts.header")
<main class="font-dusha mt-24">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary"> Gallery <span class="text-secondary">Desa</span></span> <br>
            <span class="text-4xl text-primary">Wringinanom</span>
        </div>
    </div>

    <!-- galery section -->
    <section class="mx-auto w-11/12">
        <!-- img content -->
        <div class="my-32 grid grid-cols-1 gap-6">
            <!-- img -->
            <div class="relative">
                <img src="{{ asset('assets/img/img-breadcrumbs.png')}}" alt="" class="rounded-2xl w-full">
                <div class="absolute bottom-10 left-6 text-white">
                    <!-- title -->
                    <span class=" text-2xl">Pawai Kendaraan</span>
                    <!-- description -->
                    <p>Description</p>
                </div>
            </div>
            <!-- img end -->

            <!-- img -->
            <div class="relative">
                <img src="{{ asset('assets/img/img-breadcrumbs.png')}}" alt="" class="rounded-2xl w-full">
                <div class="absolute bottom-10 left-6 text-white">
                    <!-- title -->
                    <span class=" text-2xl">Pawai Kendaraan</span>
                    <!-- description -->
                    <p>Description</p>
                </div>
            </div>
            <!-- img end -->
        </div>
        <!-- img content end -->
    </section>
</main>
@include("layouts.footer")