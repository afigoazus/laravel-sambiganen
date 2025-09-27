@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keterangan</span> <br>
            <span class="text-4xl text-secondary">Kehilangan</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <!-- Print the error to the front-end -->
    @include('components.error')

    <form action="{{ route('kehilangan.store')}}" method="POST" class="mx-auto my-10 w-11/12 p-4 flex flex-col gap-4 font-sans" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT KETERANGAN KEHILANGAN</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan kehilangan barang)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

<!-- data diri -->
<div class="bg-white p-6 rounded-md shadow">
    <h2 class="text-xl font-semibold mb-4">Data Diri</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <!-- name field -->
        <div class="">
            <label for="name">Nama <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="name" id="name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Anda" required>
            </label>
        </div>

        <!-- tempat lahir field -->
        <div class="">
            <label for="tempat-lahir">Tempat Lahir <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="tempat-lahir" id="tempat-lahir" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir" required>
            </label>
        </div>

        <!-- tanggal lahir field -->
        <div class="">
            <label for="tanggal-lahir">Tanggal Lahir <span class="text-[#FF0000]">*</span> <br>
                <input type="date" name="tanggal-lahir" id="tanggal-lahir" class="w-full mt-1 outline-none border-b-2 border-black border-dotted focus:border-solid" required>
            </label>
        </div>

        <!-- jenis kelamin field -->
        <div class="">
            <span>Jenis Kelamin <span class="text-[#FF0000]">*</span></span>
            <div class="flex gap-10">
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="gender"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Laki-Laki" required>
                    </div>
                    <span class="text-gray-700">Laki-Laki</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="gender"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Perempuan">
                    </div>
                    <span class="text-gray-700">Perempuan</span>
                </label>
            </div>
        </div>

        <!-- status perkawinan field -->
        <div class="flex flex-col gap-2">
            <span>Status Perkawinan <span class="text-[#FF0000]">*</span></span>
            <select name="status-perkawinan" id="tempat-dilahirkan" class="border-2 border-black" required>
                <option disabled selected>Status Perkawinan</option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Sudah Kawin">Sudah Kawin</option>
                <option value="Janda">Janda</option>
                <option value="Duda">Duda</option>
            </select>
        </div>

        <!-- pekerjaan field -->
        <div class="">
            <label for="pekerjaan">Pekerjaan <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="pekerjaan" id="pekerjaan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pekerjaan Anda" required>
            </label>
        </div>

        <!-- agama field -->
        <div class="">
            <span>Agama<span class="text-[#FF0000]">*</span></span>
            <div class="flex gap-10">
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Islam" required>
                    </div>
                    <span class="text-gray-700">Islam</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Kristen">
                    </div>
                    <span class="text-gray-700">Kristen</span>
                </label>
                
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Katolik">
                    </div>
                    <span class="text-gray-700">Katolik</span>
                </label>
                
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Hindu">
                    </div>
                    <span class="text-gray-700">Hindu</span>
                </label>
                
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Budha">
                    </div>
                    <span class="text-gray-700">Budha</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Konghucu">
                    </div>
                    <span class="text-gray-700">Konghucu</span>
                </label>
            </div>
        </div>

        <!-- pendidikan field -->
        <div class="">
            <label for="pendidikan">Pendidikan <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="pendidikan" id="pendidikan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pendidikan Terakhir Anda" required>
            </label>
        </div>

        <!-- nik field -->
        <div class="">
            <label for="nik">NIK <span class="text-[#FF0000]">*</span> <br>
                <input minlength="16" maxlength="16" type="text" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Anda" required>
            </label>
        </div>

        <!-- no kk field -->
        <div class="">
            <label for="no-kk">No KK <span class="text-[#FF0000]">*</span> <br>
                <input minlength="16" maxlength="16" type="text" name="no-kk" id="no-kk" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No KK Anda" required>
            </label>
        </div>
    </div>
</div>
      
<!-- Container 2: Detail Kehilangan -->
<div class="bg-white p-6 rounded-md shadow">
    <h2 class="text-xl font-semibold mb-4">Detail Kehilangan</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

        <!-- alamat field -->
        <div class="">
            <label for="alamat">Alamat <span class="text-[#FF0000]">*</span> <br>
                <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Sambiganen Kecamatan Ngrayun Kabupaten Ponorogo</span>
                <textarea name="alamat" id="alamat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat"></textarea>
            </label>
        </div>

        <!-- barang hilang field -->
        <div class="">
            <label for="barang-hilang">Barang Yang Hilang <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="barang-hilang" id="barang-hilang" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Barang Yang Hilang" required>
            </label>
        </div>

        <!-- no whatsapp -->
        <div class="">
            <label for="">No Telepon/Whatsapp <span class="text-[#FF0000]">*</span>
                <input type="text" name="no-wa" id="no-wa" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No Telepon/Whatsapp" required>
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