@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Perpindahan</span> <br>
            <span class="text-4xl text-secondary">Penduduk</span>
        </div>
    </div>

    <form action="" method="POST" class="mx-auto my-10 max-w-3xl p-4 flex flex-col items-center gap-4 font-sans" id="myForm">
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT PERPINDAHAN PENDUDUK</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan perpindahan domisili)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

        <!-- no kk field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="kk">No KK <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="kk" id="kk" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No KK" required>
            </label>
        </div>

        <!-- name field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="name">Nama Pemohon <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="name" id="name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Pemohon" required>
            </label>
        </div>

        <!-- no nik field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nik">No NIK <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No NIK" required>
            </label>
        </div>

        <!-- alamat asal field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="asal">Alamat Asal <span class="text-[#FF0000]">*</span> <br>
                <textarea name="asal" id="asal" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat Asal Anda"></textarea>
            </label>
        </div>

        <!-- kode pos field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="pos">Kode Pos <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="pos" id="pos" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Kode Pos" required>
            </label>
        </div>

        <!-- no telepon field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="telepon">No Telepon <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="telepon" id="telepon" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="ex: 083123456789" required>
            </label>
        </div>

        <!-- rt asal field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="rt">RT Asal <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="rt" id="rt" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="RT Asal Anda" required>
            </label>
        </div>

        <!-- rw asal field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="rw">RW Asal <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="rw" id="rw" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="RW Asal Anda" required>
            </label>
        </div>

        <!-- klasifikasi perpindahan field -->
        <div class="bg-white p-4 w-full rounded-md flex flex-col gap-2">
            <span>Klasifikasi Perpindahan <span class="text-[#FF0000]">*</span></span>
            <div class="space-y-4">
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="classification"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Dalam satu desa/kelurahan atau yang disebut dengan nama lain</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="classification"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Antar desa/kelurahan atau yang disebut dengan nama lain dalam satu kecamatan</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="classification"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Antar kecamatan atau yang disebut dengan nama lain dalam satu kabupaten/kota</span>
                </label>

                <label class="flex items-center space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="classification"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Antar kabupater/kota dalam satu provinsi</span>
                </label>

                <label class="flex items-center space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="classification"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Antar provinsi</span>
                </label>
            </div>
        </div>

        <!-- desa pindah field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="desa-pindah">Desa/Kelurahan Pindah <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="desa-pindah" id="desa-pindah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Desa/Kelurahan Pindah" required>
            </label>
        </div>

        <!-- kecamatan pindah field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="kecamatan-pindah">Kecamatan Pindah <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="kecamatan-pindah" id="kecamatan-pindah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Kecamatan Pindah" required>
            </label>
        </div>

        <!-- provinsi field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="provinsi-pindah">Provinsi Pindah <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="provinsi-pindah" id="provinsi-pindah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Provinsi Pindah" required>
            </label>
        </div>

        <!-- rt pindah field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="rt-pindah">RT Pindah <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="rt-pindah" id="rt-pindah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="RT Pindah Anda" required>
            </label>
        </div>

        <!-- rw pindah field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="rw-pindah">RW Pindah <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="rw-pindah" id="rw-pindah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="RW Pindah Anda" required>
            </label>
        </div>

        <!-- kode pos pindah field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="pos-pindah">Kode Pos Pindah <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="pos-pindah" id="pos-pindah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Kode Pos Pindah Anda" required>
            </label>
        </div>

        <!-- alasan pindah field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="kategori">Alasan Pindah <span class="text-[#FF0000]">*</span> <br>
                <select name="alasan" id="alasan" class="mt-2 border border-black" onchange="showLainnyaField()" required>
                    <option disabled selected>Pilih Alasan Pindah</option>
                    <option value="Pekerjaan">Pekerjaan</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Keamanan">Keamanan</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Perumahan">Perumahan</option>
                    <option value="Keluarga">Keluarga</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </label>
            <div id="lainnyaField" class="hidden mt-2">
                <label for="lainnya">
                    <input type="text" name="lainnya" id="lainnya" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Alasan Lainnya" required>
                </label>
            </div>
        </div>

        <!-- jenis kepindahan field -->
        <div class="bg-white p-4 w-full rounded-md flex flex-col gap-2">
            <span>Jenis Kepindahan <span class="text-[#FF0000]">*</span></span>
            <div class="space-y-4">
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="jenis-kepindahan"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Kepala Keluarga</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="jenis-kepindahan"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Kepala Keluarga dan seluruh Anggota Keluarga</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="jenis-kepindahan"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Kepala Keluarga dan Sebagian Anggota Keluarga</span>
                </label>

                <label class="flex items-center space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="jenis-kepindahan"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Anggota Keluarga</span>
                </label>
            </div>
        </div>

        <!-- anggota keluarga tidak pindah field -->
        <div class="bg-white p-4 w-full rounded-md flex flex-col gap-2">
            <span>Anggota Keluarga Tidak Pindah <span class="text-[#FF0000]">*</span></span>
            <div class="space-y-4">
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="keluarga-tidak-pindah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Numpang KK</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="keluarga-tidak-pindah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Membuat KK Baru</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="keluarga-tidak-pindah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">No KK Tetap</span>
                </label>
            </div>
        </div>

        <!-- anggota keluarga yang pindah field -->
        <div class="bg-white p-4 w-full rounded-md flex flex-col gap-2">
            <span>Anggota Keluarga Yang Pindah <span class="text-[#FF0000]">*</span></span>
            <div class="space-y-4">
                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="keluarga-pindah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Numpang KK</span>
                </label>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <div class="flex-shrink-0 mt-1">
                        <input type="radio"
                            name="keluarga-pindah"
                            class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full">
                    </div>
                    <span class="text-gray-700">Membuat KK Baru</span>
                </label>
            </div>
        </div>

        <!-- Daftar Anggota Keluarga Yang Pindah -->
        <div class="bg-white p-4 w-full rounded-md flex flex-col gap-2">
            <span>Daftar Anggota Keluarga Yang Pindah</span>

            <!-- Form rows for family members -->
            <div class="grid grid-cols-1 gap-4">
                <!-- Form rows for family members -->
                <div class="grid grid-cols-1 gap-4">
                    <!-- Row 1 -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1">
                            <label for="nik_fam1" class="block text-sm font-medium text-gray-700">NIK</label>
                            <input type="text" name="nik_fam1" id="nik_fam1" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK" required>
                        </div>
                        <div class="col-span-1">
                            <label for="nama_fam1" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="nama_fam1" id="nama_fam1" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required>
                        </div>
                        <div class="col-span-1">
                            <label for="status_fam1" class="block text-sm font-medium text-gray-700">Status Hubungan Keluarga</label>
                            <input type="text" name="status_fam1" id="status_fam1" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Status Hubungan" required>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1">
                            <label for="nik_fam2" class="block text-sm font-medium text-gray-700">NIK</label>
                            <input type="text" name="nik_fam2" id="nik_fam2" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK" required>
                        </div>
                        <div class="col-span-1">
                            <label for="nama_fam2" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="nama_fam2" id="nama_fam2" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required>
                        </div>
                        <div class="col-span-1">
                            <label for="status_fam2" class="block text-sm font-medium text-gray-700">Status Hubungan Keluarga</label>
                            <input type="text" name="status_fam2" id="status_fam2" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Status Hubungan" required>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1">
                            <label for="nik_fam3" class="block text-sm font-medium text-gray-700">NIK</label>
                            <input type="text" name="nik_fam3" id="nik_fam3" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK" required>
                        </div>
                        <div class="col-span-1">
                            <label for="nama_fam3" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="nama_fam3" id="nama_fam3" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required>
                        </div>
                        <div class="col-span-1">
                            <label for="status_fam3" class="block text-sm font-medium text-gray-700">Status Hubungan Keluarga</label>
                            <input type="text" name="status_fam3" id="status_fam3" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Status Hubungan" required>
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1">
                            <label for="nik_fam4" class="block text-sm font-medium text-gray-700">NIK</label>
                            <input type="text" name="nik_fam4" id="nik_fam4" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK" required>
                        </div>
                        <div class="col-span-1">
                            <label for="nama_fam4" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="nama_fam4" id="nama_fam4" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required>
                        </div>
                        <div class="col-span-1">
                            <label for="status_fam4" class="block text-sm font-medium text-gray-700">Status Hubungan Keluarga</label>
                            <input type="text" name="status_fam4" id="status_fam4" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Status Hubungan" required>
                        </div>
                    </div>

                    <!-- Row 5 -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1">
                            <label for="nik_fam5" class="block text-sm font-medium text-gray-700">NIK</label>
                            <input type="text" name="nik_fam5" id="nik_fam5" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK" required>
                        </div>
                        <div class="col-span-1">
                            <label for="nama_fam5" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="nama_fam5" id="nama_fam5" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required>
                        </div>
                        <div class="col-span-1">
                            <label for="status_fam5" class="block text-sm font-medium text-gray-700">Status Hubungan Keluarga</label>
                            <input type="text" name="status_fam5" id="status_fam5" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Status Hubungan" required>
                        </div>
                    </div>
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