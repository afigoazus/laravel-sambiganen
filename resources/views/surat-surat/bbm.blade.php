@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat</span> <br>
            <span class="text-4xl text-secondary">BBM</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <form action="{{ route('bbm.store') }}" method="POST" class="mx-auto my-10 w-11/12 p-4 flex flex-col gap-4 font-sans" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT BAHAN BAKAR</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan pembelian bahan bakar)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

        <!-- form data diri -->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Diri</span>

            <!-- form data diri -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- name field -->
                <div class="">
                    <label for="name">Nama <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="name" id="name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Anda" required>
                    </label>
                </div>

                <!-- nik field -->
                <div class="">
                    <label for="nik">NIK <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Anda" required>
                    </label>
                </div>

                <!-- alamat field -->
                <div class="">
                    <label for="alamat">Alamat <span class="text-[#FF0000]">*</span> <br>
                        <textarea name="alamat" id="alamat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat Anda"></textarea>
                    </label>
                </div>

                <!-- nama usaha field -->
                <div class="">
                    <label for="nama-usaha">Nama Usaha (jika ada) <br>
                        <input type="text" name="nama-usaha" id="nama-usaha" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Usaha">
                    </label>
                </div>

                <!-- Sektor pengguna field -->
                <div class="">
                    <label for="sektor-pengguna">Sektor Konsumen Pengguna <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="sektor-pengguna" id="sektor-pengguna" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Sektor Konsumen Pengguna" required>
                    </label>
                    <!-- jenis usaha field -->
                    <div class="">
                        <label for="jenis-usaha">Jenis Usaha <span class="text-[#FF0000]">*</span> <br>
                            <input type="text" name="jenis-usaha" id="jenis-usaha" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Jenis Usaha Anda" required>
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