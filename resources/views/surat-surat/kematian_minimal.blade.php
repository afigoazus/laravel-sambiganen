@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keterangan</span> <br>
            <span class="text-4xl text-secondary">Kematian</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <!-- Print the error to the front-end -->
    @include('components.error')

    <form action="{{ route('kematian-nkri.store')}}" method="POST" class="mx-auto my-10 w-11/12 p-4 font-sans flex flex-col gap-4" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT KETERANGAN KEMATIAN WILAYAH NKRI</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan keterangan kematian pada negara)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

        <!-- form pelapor -->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Pelapor</span>

            <!-- form data pelapor -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- nama ortu field -->
                <div>
                    <label for="nama-pelapor">Nama Lengkap<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-pelapor" id="nama-pelapor" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required>
                    </label>
                </div>

                <!-- nik field -->
                <div class="">
                    <label for="nik">NIK <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" minlength="16" maxlength="16" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK" required>
                    </label>
                </div>

                <!-- kewarganegaraan field -->
                <div class="">
                    <span>Kewarganegaraan <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="kewarganegaraan"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">WNI</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="kewarganegaraan"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">WNA</span>
                        </label>
                    </div>
                </div>

                        <!--  fieurutan anak field -->
                <div class="">
                    <label for="urutan-anak">Urutan anak <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="urutan-anak" id="urutan-anak" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Urutan anak" required>
                    </label>
                </div>
            </div>
        </div>
        
                <!-- no hp field -->
                <div class="">
                    <label for="no-hp">No HP/WA <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="no-hp" id="no-hp" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No HP/WA" required>
                    </label>
                </div>
            </div>
        </div>

        <!-- form data saksi 1-->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Saksi 1</span>

            <!-- form data saksi 1 -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- data saksi 1 field -->
                <div>
                    <label for="nama-saksi-1">Nama Lengkap<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-saksi-1" id="nama-saksi-1" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required>
                    </label>
                </div>

                <!-- nik field -->
                <div class="">
                    <label for="nik-saksi-1">NIK <span class="text-[#FF0000]">*</span> <br>
                        <input minlength="16" maxlength="16" type="text" name="nik-saksi-1" id="nik-saksi-1" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK" required>
                    </label>
                </div>

                <!-- kewarganegaraan field -->
                <div class="">
                    <span>Kewarganegaraan <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="kewarganegaraan-saksi-1"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">WNI</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="kewarganegaraan-saksi-1"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">WNA</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- form data saksi 2-->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Saksi 2</span>

            <!-- form data saksi 2 -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- data saksi 2 field -->
                <div>
                    <label for="nama-saksi-2">Nama Lengkap<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-saksi-2" id="nama-saksi-2" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required>
                    </label>
                </div>

                <!-- nik field -->
                <div class="">
                    <label for="nik">NIK <span class="text-[#FF0000]">*</span> <br>
                        <input minlength="16" maxlength="16" type="text" name="nik-saksi-2" id="nik-saksi-2" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK" required>
                    </label>
                </div>

                <!-- kewarganegaraan field -->
                <div class="">
                    <span>Kewarganegaraan <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="kewarganegaraan-saksi-2"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">WNI</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="kewarganegaraan-saksi-2"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">WNA</span>
                        </label>
                    </div>
                </div>
            </div>
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
                    <label for="nik-ayah">NIK Ayah <span class="text-[#FF0000]">*</span> <br>
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

                <!-- kewarganegaraan field -->
                <div class="">
                    <span>Kewarganegaraan <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="kewarganegaraan-ayah"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">WNI</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="kewarganegaraan-ayah"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">WNA</span>
                        </label>
                    </div>
                </div>

                <!-- nama ibu -->
                <div>
                    <label for="nama-ibu">Nama Ibu<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-ibu" id="nama-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Ibu" required>
                    </label>
                </div>

                <!-- nik ibu field -->
                <div class="">
                    <label for="nik-ibu">NIK Ibu <span class="text-[#FF0000]">*</span> <br>
                        <input minlength="16" maxlength="16" type="text" name="nik-ibu" id="nik-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Ibu" required>
                    </label>
                </div>

                <!-- tempat lahir ibu field -->
                <div class="">
                    <label for="tempat-lahir-ibu">Tempat Lahir Ibu <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-lahir-ibu" id="tempat-lahir-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir Ibu" required>
                    </label>
                </div>

                <!-- tanggal lahir field -->
                <div class="">
                    <label for="tanggal-lahir-ibu">Tanggal Lahir Ibu <span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-lahir-ibu" id="tanggal-lahir-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required>
                    </label>
                </div>

                <!-- kewarganegaraan field -->
                <div class="">
                    <span>Kewarganegaraan <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="kewarganegaraan-ibu"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">WNI</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="kewarganegaraan-ibu"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">WNA</span>
                        </label>
                    </div>
                </div>

            </div>
        </div>

        <!-- form data kematian -->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Kematian</span>

            <!-- form data kematian -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- nik -->
                <div>
                    <label for="nik-kematian">NIK<span class="text-[#FF0000]">*</span> <br>
                        <input minlength="16" maxlength="16" type="text" name="nik-kematian" id="nik-kematian" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK" required>
                    </label>
                </div>

                <!-- nama field -->
                <div class="">
                    <label for="nama-kematian">Nama Lengkap <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-kematian" id="nama-kematian" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Lengkap" required>
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

                <!-- sebab kematian field -->
                <div class="flex flex-col gap-2">
                    <span>Sebab Kematian <span class="text-[#FF0000]">*</span></span>
                    <select name="sebab-kematian" id="sebab-kematian" class=" border-2 border-black" required>
                        <option disabled selected>Pilih Sebab Kematian</option>
                        <option value="1">Sakit biasa/tua</option>
                        <option value="2">Wabah penyakit</option>
                        <option value="3">Kecelakaan</option>
                        <option value="4">Kriminalitas</option>
                        <option value="5">Bunuh diri</option>
                        <option value="6">Lainnya</option>
                    </select>
                </div>

                <!-- tempat kematian -->
                <div>
                    <label for="tempat-kematian">Tempat Kematian<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-kematian" id="tempat-kematian" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Kematian" required>
                    </label>
                </div>

                <!-- yang menerangkan field -->
                <div class="flex flex-col gap-2">
                    <span>Yang Menerangkan <span class="text-[#FF0000]">*</span></span>
                    <select name="yang-menerangkan" id="yang-menerangkan" class="border-2 border-black" required>
                        <option disabled selected>Yang Menerangkan Kematian</option>
                        <option value="1">Dokter</option>
                        <option value="2">Tenaga Kesehatan</option>
                        <option value="3">Kepolisian</option>
                        <option value="4">Lainnya</option>
                    </select>
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