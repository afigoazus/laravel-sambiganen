@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keterangan</span> <br>
            <span class="text-4xl text-secondary">Taksiran Harga Tanah</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <!-- Print the error to the front-end -->
    @include('components.error')

    <form action="{{ route('taksiran-harga-tanah.store')}}" method="POST" class="mx-auto my-10 w-11/12 p-4 space-y-4 font-sans" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT TAKSIRAN HARGA TANAH</span>
            <p class="text-[#5F6368] font-normal">(Untuk Keterangan Taksiran Harga tanah)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>


        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Nama Pemilik</span>
            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- nama pihak pertama field -->
                <div>
                    <label for="nama">Nama <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama" id="nama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required>
                    </label>
                </div>

                <!-- tempat lahir pemilik -->
                <div>
                    <label for="tempat-lahir">Tempat Lahir<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-lahir" id="tempat-lahir" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir Pemilik" required>
                    </label>
                </div>

                <div>
                    <label for="tanggal-lahir">Tanggal Lahir<span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-lahir" id="tanggal-lahir" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir Pemilik" required>
                    </label>
                </div>

                <div>
                    <label for="pekerjaan">Pekerjaan<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="pekerjaan" id="pekerjaan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir Pemilik" required>
                    </label>
                </div>
        
                <!-- alamat field -->
                <div class="col-span-full">
                    <label for="alamat">Alamat <span class="text-[#FF0000]">*</span> <br>
                        <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Sambiganen Kecamatan Ngrayun Kabupaten Ponorogo</span>
                        <textarea name="alamat" id="alamat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat"></textarea>
                    </label>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Data Tanah</span>

            <!-- no sertifikat field -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-4">
                <div>
                    <label for="no-sertifikat">No. Sertifikat <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="no-sertifikat" id="no-sertifikat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No. Sertifikat" required>
                    </label>
                </div>

                <!-- luas tanah field -->
                <div>
                    <label for="luas-tanah">Luas Tanah <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="luas-tanah" id="luas-tanah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Luas Tanah" required>
                    </label>
                </div>
                
                <!-- Harga field -->
                <div>
                    <label for="harga">Harga Tanah per meter <span class="text-[#FF0000]">*</span> <br>
                        <input type="number" name="harga" id="harga " class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Harga Tanah Dalam Rupiah" required>
                    </label>
                </div>
            </div>
        </div>

        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Batas Tanah</span>
            <p class="text-md text-stone-500">(Isi dengan nama pemilik batas tanah)</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">

                <!-- batas utara field -->
                <div>
                    <label for="batas-utara">Batas Utara<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="batas-utara" id="batas-utara" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas utara" required>
                    </label>
                </div>
                
                <!-- batas timur field -->
                <div>
                    <label for="batas-timur">Batas Timur<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="batas-timur" id="batas-timur" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas timur" required>
                    </label>
                </div>
                
                <!-- batas barat -->
                <div>
                    <label for="batas-barat">Batas Barat<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="batas-barat" id="batas-barat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas barat" required>
                    </label>
                </div>
                
                <!-- batas selatan -->
                <div>
                    <label for="batas-selatan">Batas Selatan<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="batas-selatan" id="batas-selatan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas selatan" required>
                    </label>
                </div>
            </div>
        </div>

        <!-- Submit and Reset Button -->
        @include('components.submit-reset-button')
    </form>
</main>

<!-- Confirmation dialog before sbmit -->
@include('components.confirm')

@include("layouts.footer")