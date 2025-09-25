@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keterangan</span> <br>
            <span class="text-4xl text-secondary">Penghasilan</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <!-- Print the error to the front-end -->
    @include('components.error')

    <form action="{{ route('keterangan-penghasilan.store')}}" method="POST" class="mx-auto my-10 w-11/12 max-w-prose p-4 flex flex-col gap-4 font-sans" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT KETERANGAN PENGHASILAN</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan pengembangan usaha)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

        <!-- name field -->
        <div class="bg-white p-4 w-full rounded-antud">
            <label for="name">Nama <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="name" id="name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Anda" required>
            </label>
        </div>

        <!-- nik -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nik">NIK <span class="text-[#FF0000]">*</span> <br>
                <input minlength="16" maxlength="16" type="text" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Anda" required>
            </label>
        </div>

         <!-- tempat lahir field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="tempat-lahir">Tempat Lahir <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="tempat-lahir" id="tempat-lahir" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir" required>
            </label>
        </div>

        <!-- tanggal lahir field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="tanggal-lahir">Tanggal Lahir <span class="text-[#FF0000]">*</span> <br>
                <input type="date" name="tanggal-lahir" id="tanggal-lahir" class="w-full mt-1 outline-none border-b-2 border-black border-dotted focus:border-solid" required>
            </label>
        </div>

          <!-- jenis kelamin field -->
        <div class="bg-white p-4 w-full rounded-md">
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

        <!-- pekerjaan ayah field -->
                <div class="">
                    <label for="pekerjaan">Pekerjaan <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="pekerjaan" id="pekerjaan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pekerjaan" required>
                    </label>
                </div>

       <!-- alamat field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="alamat">Alamat <span class="text-[#FF0000]">*</span> <br>
                <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Sambiganen Kecamatan Ngrayun Kabupaten Ponorogo</span>
                <textarea name="alamat" id="alamat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat"></textarea>
            </label>
        </div>

        <!-- pekerjaan ayah field -->
                <div class="">
                    <label for="penghasilan">Penghasilan perbulan <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="penghasilan" id="penghasilan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="contoh 3.000.000" required>
                    </label>
                </div>



        <!-- Submit and Reset Button -->
        @include('components.submit-reset-button')
    </form>
</main>

<!-- Confirmation dialog before sbmit -->
@include('components.confirm')

@include("layouts.footer")