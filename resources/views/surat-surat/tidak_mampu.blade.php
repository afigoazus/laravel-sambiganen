@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat keterangan</span> <br>
            <span class="text-4xl text-secondary">Tidak Mampu</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <!-- Print the error to the front-end -->
    @include('components.error')

    <form action="{{ route('keringanan-sekolah.store')}}" method="POST" class="mx-auto my-10 w-11/12 p-4 font-sans flex flex-col gap-4" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT KETERANGAN TIDAK MAMPU</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan keterangan Tidak mampu)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

                <!-- form data ortu-->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Pemohon</span>

            div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- nama ayah -->
                <div>
                    <label for="nama-pemohon">Nama<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-pemohon" id="nama-pemohon" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama pemohon" required>
                    </label>
                </div>

                <!-- nik ayah field -->
                <div class="">
                    <label for="nik-pemohon">NIK<span class="text-[#FF0000]">*</span> <br>
                        <input minlength="16" maxlength="16" type="text" name="nik-pemohon" id="nik-pemohon" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK pemohon" required>
                    </label>
                </div>

                <!-- tempat lahir ayah field -->
                <div class="">
                    <label for="tempat-lahir-pemohon">Tempat Lahir <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-lahir-pemohon" id="tempat-lahir-pemohon" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir pemohon" required>
                    </label>
                </div>

                <!-- tanggal lahir field -->
                <div class="">
                    <label for="tanggal-lahir-pemohon">Tanggal Lahir<span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-lahir-pemohon" id="tanggal-lahir-pemohon" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required>
                    </label>
                </div>

                <!-- Alamat pemohon field -->
                <div class="">
                    <label for="alamat-pemohon">Alamat<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="alamat-pemohon" id="alamat-pemohon" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="alamat pemohon" required>
                    </label>
                </div>

        <!-- form data ortu-->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Orang Tua</span>

            <!-- form nama ortu -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- nama ayah -->
                <div>
                    <label for="nama-ayah">Nama Ayah<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-ayah" id="nama-ayah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Ayah" required>
                    </label>
                </div>

                <!-- nik ayah field -->
                <div class="">
                    <label for="nik-ayah">NIK<span class="text-[#FF0000]">*</span> <br>
                        <input minlength="16" maxlength="16" type="text" name="nik-ayah" id="nik-ayah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Ayah" required>
                    </label>
                </div>

                <!-- tempat lahir ayah field -->
                <div class="">
                    <label for="tempat-lahir-ayah">Tempat Lahir Ayah <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-lahir-ayah" id="tempat-lahir-ayah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir Ayah" required>
                    </label>
                </div>

                <!-- tanggal lahir field -->
                <div class="">
                    <label for="tanggal-lahir-ayah">Tanggal Lahir Ayah <span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-lahir-ayah" id="tanggal-lahir-ayah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required>
                    </label>
                </div>

                <!-- status perkawinan field -->
                <div class="">
                    <span>Status perkawinan <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="status-perkawinan-ayah"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">Kawin</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="status-perkawinan-ayah"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">Cerai</span>
                        </label>
                    </div>
                </div>

        <!-- agama field -->
        <div class="bg-white p-4 w-full rounded-md">
            <span>Agama<span class="text-[#FF0000]">*</span></span>
            <div class="flex gap-10">
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ayah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Islam" required>
                    </div>
                    <span class="text-gray-700">Islam</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ayah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Kristen">
                    </div>
                    <span class="text-gray-700">Kristen</span>
                </label>
                
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ayah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Katolik">
                    </div>
                    <span class="text-gray-700">Katolik</span>
                </label>
                
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ayah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Hindu">
                    </div>
                    <span class="text-gray-700">Hindu</span>
                </label>
                
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ayah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Budha">
                    </div>
                    <span class="text-gray-700">Budha</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ayah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Konghucu">
                    </div>
                    <span class="text-gray-700">Konghucu</span>
                </label>
            </div>
        </div>

                <!-- pekerjaan ayah field -->
                <div class="">
                    <label for="pekerjaan-ayah">Pekerjaan <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="pekerjaan-ayah" id="pekerjaan-ayah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pekerjaan Ayah" required>
                    </label>
                </div>

                <!-- pekerjaan ayah field -->
                <div class="">
                    <label for="alamat-ayah">Alamat<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="alamat-ayah" id="alamat-ayah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="alamat" required>
                    </label>
                </div>

                <!-- nama ibu -->
                <div>
                    <label for="nama-ibu">Nama Ibu<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-ibu" id="nama-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Ibu" required>
                    </label>
                </div>

                <!-- nik ayah field -->
                <div class="">
                    <label for="nik-ibu">NIK<span class="text-[#FF0000]">*</span> <br>
                        <input minlength="16" maxlength="16" type="text" name="nik-ibu" id="nik-ayah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Ayah" required>
                    </label>
                </div>

                <!-- tempat lahir ayah field -->
                <div class="">
                    <label for="tempat-lahir-ibu">Tempat Lahir  <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-lahir-ibu" id="tempat-lahir-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir ibu" required>
                    </label>
                </div>

                <!-- tanggal lahir field -->
                <div class="">
                    <label for="tanggal-lahir-ibu">Tanggal Lahir <span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-lahir-ibu" id="tanggal-lahir-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required>
                    </label>
                </div>

                <!-- status perkawinan field -->
                <div class="">
                    <span>Status perkawinan <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="status-perkawinan-ibu"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">Kawin</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="status-perkawinan-ibu"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">Cerai</span>
                        </label>
                    </div>
                </div>

        <!-- agama field -->
        <div class="bg-white p-4 w-full rounded-md">
            <span>Agama<span class="text-[#FF0000]">*</span></span>
            <div class="flex gap-10">
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ibu"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Islam" required>
                    </div>
                    <span class="text-gray-700">Islam</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ibu"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Kristen">
                    </div>
                    <span class="text-gray-700">Kristen</span>
                </label>
                
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ibu"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Katolik">
                    </div>
                    <span class="text-gray-700">Katolik</span>
                </label>
                
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ibu"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Hindu">
                    </div>
                    <span class="text-gray-700">Hindu</span>
                </label>
                
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ibu"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Budha">
                    </div>
                    <span class="text-gray-700">Budha</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="agama-ibu"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Konghucu">
                    </div>
                    <span class="text-gray-700">Konghucu</span>
                </label>
            </div>
        </div>

                <!-- pekerjaan ayah field -->
                <div class="">
                    <label for="pekerjaan-ibu">Pekerjaan <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="pekerjaan-ibu" id="pekerjaan-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pekerjaan ibu" required>
                    </label>
                </div>

                <!-- pekerjaan ayah field -->
                <div class="">
                    <label for="alamat-ibu">Alamat<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="alamat-ibu" id="alamat-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="alamat" required>
                    </label>
                </div>


        <!-- Submit and Reset Button -->
        @include('components.submit-reset-button')
    </form>
</main>

<!-- Confirmation dialog before sbmit -->
@include('components.confirm')

@include("layouts.footer")