@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat</span> <br>
            <span class="text-4xl text-secondary">Kelahiran</span>
        </div>
    </div>

    <form action="{{ route('kelahiran.store')}}" method="POST" class="mx-auto my-10 w-11/12 p-4 flex flex-col gap-4 font-sans">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT KELAHIRAN</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan pembuatan akte lahir)</p> 
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

        <!-- form data pelapor -->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Pelapor</span>
            
            <!-- form data diri -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- name field -->
                <div class="">
                    <label for="nama-pelapor">Nama <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-pelapor" id="nama-pelapor" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Anda" required> 
                    </label>
                </div>

                <!-- nik field -->
                <div class="">
                    <label for="nik-pelapor">NIK <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nik-pelapor" id="nik-pelapor" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Anda" required> 
                    </label> 
                </div>
           
                <!-- no dok perjalanan field -->
                <div class="">
                    <label for="no-dok-perjalanan">NO Dok Perjalanan <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="no-dok-perjalanan" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No Dok Perjalanan" required> 
                    </label> 
                </div>

                <!-- kewarganegaraan field -->
                <div class="">
                    <span>Kewarganegaraan <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="kewarganegaraan-pelapor" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">WNI</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kewarganegaraan-pelapor"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">WNA</span>
                        </label>
                    </div>
                </div>

                <!-- no telp/wa field -->
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
                        <input type="text" name="nik-saksi-1" id="nik-saksi-1" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid"  placeholder="NIK" required> 
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
                        <input type="text" name="nik-saksi-2" id="nik-saksi-2" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid"  placeholder="NIK" required> 
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
                        <input type="text" name="nik-ayah" id="nik-ayah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid"  placeholder="NIK Ayah" required> 
                    </label> 
                </div>
               
                <!-- tempat lahir ayah field -->
                <div class="">
                    <label for="tempat-lahir-ayah">Tempat Lahir Ayah <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-lahir-ayah" id="tempat-lahir-ayah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid"  placeholder="Tempat Lahir Ayah" required> 
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
                        <input type="text" name="nik-ibu" id="nik-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid"  placeholder="NIK Ibu" required> 
                    </label> 
                </div>
               
                <!-- tempat lahir ibu field -->
                <div class="">
                    <label for="tempat-lahir-ibu">Tempat Lahir Ibu <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-lahir-ibu" id="tempat-lahir-ibu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid"  placeholder="Tempat Lahir Ibu" required> 
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

        <!-- form data anak -->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Anak</span>
           
            <!-- form data anak -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- no kk -->
                <div>
                    <label for="no-kk-anak">No Kartu Keluarga<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="no-kk-anak" id="no-kk-anak" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No Kartu Keluarga" required> 
                    </label>
                </div>

                <!-- hubungan keluarga field -->
                <div class="">
                    <span>Hubungan Keluarga <span class="text-[#FF0000]">*</span></span>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mt-4">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="hubungan-keluarga" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">Anak</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="hubungan-keluarga"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">Cucu</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="hubungan-keluarga"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="3">
                            </div>
                            <span class="text-gray-700">Famili Lain</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="hubungan-keluarga"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="4">
                            </div>
                            <span class="text-gray-700">Lainnya</span>
                        </label>
                    </div>
                </div>
                
                <!-- nama field -->
                <div class="">
                    <label for="nama-anak">Nama Lengkap <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-anak" id="nama-anak" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid"  placeholder="Nama Lengkap" required> 
                    </label> 
                </div>

                <!-- jenis kelamin field -->
                <div class="">
                    <span>Jenis Kelamin <span class="text-[#FF0000]">*</span></span>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mt-4">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="gender-anak" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">Laki-laki</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="gender-anak"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">Perempuan</span>
                        </label>
                    </div>
                </div>

                <!-- tempat dilahirkan field -->
                <div class="">
                    <span>Tempat Dilahirkan <span class="text-[#FF0000]">*</span></span>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mt-4">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="tempat-dilahirkan" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">RS/RB</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="tempat-dilahirkan"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">Pukesmas</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="tempat-dilahirkan"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="3">
                            </div>
                            <span class="text-gray-700">Polindes</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="tempat-dilahirkan"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="4">
                            </div>
                            <span class="text-gray-700">Rumah</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="tempat-dilahirkan"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="5">
                            </div>
                            <span class="text-gray-700">Lainnya</span>
                        </label>
                    </div>
                </div>

                <!-- tempat kelahiran -->
                <div>
                    <label for="no-kk">Tempat Kelahiran<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-kelahiran" id="tempat-kelahiran" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Kelahiran" required> 
                    </label>
                </div> 

                <!-- tanggal kelahiran field -->
                <div class="">
                    <label for="tanggal-kematian">Tanggal Kelahiran <span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-kelahiran" id="tanggal-kelahiran" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required> 
                    </label> 
                </div>

                <!-- hari kelahiran -->
                <div>
                    <label for="hari-kelahiran">Hari Kelahiran<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="hari-kelahiran" id="hari-kelahiran" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Hari Kelahiran" required> 
                    </label>
                </div>

                <!-- jam kelahiran field -->
                <div class="">
                    <label for="jam-kelahiran">Jam Kelahiran <span class="text-[#FF0000]">*</span> <br>
                        <input type="time" name="jam-kelahiran" id="jam-kelahiran" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required> 
                    </label>
                </div>

                <!-- jenis kelahiran field -->
                <div class="">
                    <span>Jenis Kelahiran <span class="text-[#FF0000]">*</span></span>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mt-4">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="jenis-kelahiran" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">Tunggal</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="jenis-kelahiran"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">Kembar 2</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="jenis-kelahiran"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="3">
                            </div>
                            <span class="text-gray-700">Kembar 3</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="jenis-kelahiran"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="4">
                            </div>
                            <span class="text-gray-700">Kembar 4</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="jenis-kelahiran"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="5">
                            </div>
                            <span class="text-gray-700">Lainnya</span>
                        </label>
                    </div>
                </div>

                <!-- kelahiran ke field -->
                <div class="">
                    <span>Kelahiran Ke <span class="text-[#FF0000]">*</span></span>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mt-4">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="kelahiran-ke" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">1</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kelahiran-ke"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">2</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kelahiran-ke"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="3">
                            </div>
                            <span class="text-gray-700">3</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kelahiran-ke"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="4">
                            </div>
                            <span class="text-gray-700">4</span>
                        </label>
                    </div>
                </div>

                <!-- penolong kelahiran field -->
                <div class="">
                    <span>Penolong Kelahiran <span class="text-[#FF0000]">*</span></span>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mt-4">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="penolong-kelahiran" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">Dokter</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="penolong-kelahiran"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">Bidan/Perawat</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="penolong-kelahiran"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="3">
                            </div>
                            <span class="text-gray-700">Dukun</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="penolong-kelahiran"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="4">
                            </div>
                            <span class="text-gray-700">Lainnya</span>
                        </label>
                    </div>
                </div>

                <!-- berat bayi -->
                <div>
                    <label for="berat-bayi">Berat Bayi<span class="text-[#FF0000]">*</span> <br>
                    <span class="font-medium">Dalam kg</span>
                        <input type="text" name="berat-bayi" id="berat-bayi" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Berat Bayi" required> 
                    </label>
                </div>

               <!-- panjang bayi -->
                <div>
                    <label for="panjang-bayi">Panjang Bayi<span class="text-[#FF0000]">*</span> <br>
                    <span class="font-medium">Dalam cm</span>
                        <input type="text" name="panjang-bayi" id="panjang-bayi" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Panjang Bayi" required> 
                    </label>
                </div> 

                <!-- golongan darah -->
                <div>
                    <label for="golongan-darah">Golongan Darah<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="golongan-darah" id="golongan-darah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Golongan Darah" required> 
                    </label>
                </div>

                <!-- agama field -->
                <div class="">
                    <span>Agama <span class="text-[#FF0000]">*</span></span>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mt-4">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="agama-anak" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">Islam</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="agama-anak"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">Kristen</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="agaama-anak"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="3">
                            </div>
                            <span class="text-gray-700">Katolik</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="agama-anak"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="4">
                            </div>
                            <span class="text-gray-700">Hindu</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="agama-anak"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="5">
                            </div>
                            <span class="text-gray-700">Buddha</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="agama-anak"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="6">
                            </div>
                            <span class="text-gray-700">Konghucu</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="agama-anak"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="7">
                            </div>
                            <span class="text-gray-700">Kepercayaan terhadap Tuhan YME</span>
                        </label>
                    </div>
                </div>

                <!-- kecacatan field -->
                <div class="">
                    <span>Kecacatan <span class="text-[#FF0000]">*</span></span>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mt-4">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="kecacatan" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">Fisik</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kecacatan"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">Netra</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kecacatan"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="3">
                            </div>
                            <span class="text-gray-700">Rungu/Wicara</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kecacatan"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="4">
                            </div>
                            <span class="text-gray-700">Mental</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kecacatan"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="5">
                            </div>
                            <span class="text-gray-700">Fisik dan Mental</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kecacatan"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="6">
                            </div>
                            <span class="text-gray-700">Lainnya</span>
                        </label>
                    </div>
                </div>

                <!-- kewarganegaraan field -->
                <div class="">
                    <span>Kewarganegaraan <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="kewarganegaraan-anak" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">WNI</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kewarganegaraan-anak"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">WNA</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <button type="submit" class="bg-primary text-white py-2 px-6 rounded-md">Kirim</button>
        </div>
    </form>
</main>
@include("layouts.footer")