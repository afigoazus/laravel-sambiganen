@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keterangan</span> <br>
            <span class="text-4xl text-secondary">Usaha</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <!-- Print the error to the front-end -->
    @include('components.error')

    <form action="{{ route('keterangan-usaha.store')}}" method="POST" class="mx-auto my-10 w-11/12 max-w-prose p-4 flex flex-col gap-4 font-sans" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT KETERANGAN USAHA</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan pengembangan usaha)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

        <!-- name field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="name">Nama <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="name" id="name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Anda" required>
            </label>
        </div>

        <!-- alamat field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="alamat">Alamat <span class="text-[#FF0000]">*</span> <br>
                <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Wringinanom Kecamatan Sambit Kabupaten Ponorogo</span>
                <textarea name="alamat" id="alamat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat"></textarea>
            </label>
        </div>

        <!-- nik -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nik">NIK <span class="text-[#FF0000]">*</span> <br>
                <input minlength="16" maxlength="16" type="text" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Anda" required>
            </label>
        </div>

        <!-- kategori usaha -->
        <div class="bg-white p-4 w-full rounded-md flex flex-col gap-4">
            <span class="text-2xl font-medium">Formulir Jenis Usaha</span>
            <div>
                <span>Jenis Usaha</span> <span class="text-[#FF0000]"> *</span> <br>
                <select name="kategori" id="kategori" class="border-2 border-black mt-2" required>
                    <option disabled selected>Pilih Jenis Usaha</option>
                    <option value="pertanian">Pertanian</option>
                    <option value="perindustrian">Perindustrian</option>
                    <option value="perdagangan">Perdagangan</option>
                    <option value="peternakan">Perternakan</option>
                    <option value="kerajinan">Kerajinan</option>
                    <option value="jasa">Jasa</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>

            <div>
                <label for="">
                    <span>Deskripsi Usaha</span> <span class="text-[#FF0000]"> *</span> <br>
                    <input type="text" name="deskripsi" id="deskripsi" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Deskripsi Usaha" required>
                </label>
            </div>

        </div>

        <!-- nama-usaha field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nama-usaha">Nama Usaha <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="nama-usaha" id="nama-usaha" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Usaha" required>
            </label>
        </div>

        <!-- no whatsapp -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="">No Telepon/Whatsapp <span class="text-[#FF0000]">*</span>
                <input type="text" name="no-wa" id="no-wa" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No Telepon/Whatsapp" required>
            </label>
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