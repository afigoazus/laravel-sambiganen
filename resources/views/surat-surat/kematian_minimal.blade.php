@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keterangan</span> <br>
            <span class="text-4xl text-secondary">Kematian</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <form action="{{ route('kematian-minimal.store')}}" method="POST" class="mx-auto my-10 w-11/12 p-4 font-sans flex flex-col gap-4" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT KETERANGAN KEMATIAN WILAYAH WRINGINANOM</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan keterangan kematian penduduk wringinanom)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

        <!-- form kematin -->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Kematian Penduduk Wringinanom</span>

            <!-- form data penduduk meninggal -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- nama ortu field -->
                <div>
                    <label for="parent-name">Nama Lengkap<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="parent-name" id="parent-name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required>
                    </label>
                </div>

                <!-- nik field -->
                <div class="">
                    <label for="nik">NIK <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK" required>
                    </label>
                </div>

                <!-- tanggal kematian field -->
                <div class="">
                    <label for="tanggal-kematian">Tanggal Kematian <span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-kematian" id="tanggal-kematian" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required>
                    </label>
                </div>

                <!-- jam kematian field -->
                <div class="">
                    <label for="jam-kematian">Jam Kematian <span class="text-[#FF0000]">*</span> <br>
                        <input type="time" name="jam-kematian" id="jam-kematian" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pendidikan" required>
                    </label>
                </div>

                <!-- penyebab kematian field -->
                <div class="">
                    <label for="job">Sebab Kematian <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="sebab-kematian" id="sebab-kematian" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Sebab Kematian" required>
                    </label>
                </div>

                <!-- nama ibu field -->
                <div class="">
                    <label for="nama-ibu">Nama Ibu <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-ibu" id="nama-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Ibu" required>
                    </label>
                </div>

                <!-- nama ayah field -->
                <div class="">
                    <label for="nama-ayah">Nama Ayah <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-ayah" id="nama-ayah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Ayah" required>
                    </label>
                </div>
            </div>
        </div>

        <!-- submit and reset button -->
        <div class="flex gap-6">
            <!-- reset button -->
            <button id="resetButton" type="button" class=" bg-red-600 text-white py-2 px-6 rounded-md">Hapus</button>
            <!-- submit button -->
            <button type="submit" class=" bg-blue-500 text-white py-2 px-6 rounded-md">Kirim</button>
        </div>
    </form>
</main>

<!-- Confirmation dialog before sbmit -->
@include('components.confirm')

@include("layouts.footer")