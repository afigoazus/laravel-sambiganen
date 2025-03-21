@include("layouts.header")
<main class="font-dusha mt-24">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10 text-4xl">
            <span class="text-secondary">Pengaduan</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <!-- Print the error to the front-end -->
    @include('components.error')

    <!-- main section -->
    <section>
        <div class="mx-auto w-11/12 my-12">
            <span class="text-3xl">Pengaduan</span>
            <p class="my-4">Tulis Segala Pengaduan Anda</p>
            <!-- title end -->

            <form action="{{ route('pengaduan.store') }}" method="post" class="flex flex-col">
                @csrf
                <!-- name input -->
                <label for="name">
                    <span class="text-[#756F86] text-xl">Nama</span> <span class="text-red-600 text-xl">*</span><br>
                    <input type="text" name="name" required class="p-2 border-[#DBE2EA] border-2 w-full my-2 font-sans rounded-lg">
                </label>
                <!-- name input end -->

                <!-- description input -->
                <label for="description">
                    <span class="text-[#756F86] text-xl">Deskripsi</span> <span class="text-red-600 text-xl">*</span> <br>
                    <textarea name="content" required class="p-2 border-[#DBE2EA] border-2 w-full my-2 font-sans row-span-4 rounded-lg" rows="5"></textarea>
                </label>
                <!-- description input end -->

                <!-- submit -->
                <button type="submit" class="bg-primary py-4 text-white rounded-lg">Kirim</button>
            </form>
        </div>
        <!-- title -->
    </section>
</main>
@include("layouts.footer")