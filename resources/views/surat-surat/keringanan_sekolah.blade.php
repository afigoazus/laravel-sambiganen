@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keringanan</span> <br>
            <span class="text-4xl text-secondary">Sekolah</span>
        </div>
    </div>

    <form action="{{ route('keringanan-sekolah.store')}}" method="POST" class="mx-auto my-10 w-11/12 p-4 font-sans flex flex-col gap-4" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT KERINGANAN SEKOLAH</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan keringanan sekolah)</p> 
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>
        
        <!-- form orang tua -->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Orang Tua</span>
           
            <!-- form data ortu -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- nama ortu field -->
                <div>
                    <label for="parent-name">Nama Orang Tua<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="parent-name" id="parent-name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required> 
                    </label>
                </div>

                <!-- tempat lahir ortu field -->
                <div class="">
                    <label for="tempat-lahir-ortu">Tempat Lahir <span class="text-[#FF0000]">*</span> <br>
                        <input type="Tempat" name="tempat-lahir-ortu" id="tempat-lahir-ortu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir" required> 
                    </label> 
                </div>
                
                <!-- tanggal lahir ortu field -->
                <div class="">
                    <label for="tanggal-lahir-ortu">Tanggal Lahir <span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-lahir-ortu" id="tanggal-lahir-ortu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required> 
                    </label> 
                </div>                

                <!-- jenis kelamin field -->
                <div class="">
                    <span>Jenis Kelamin <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="gender-ortu" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Laki-Laki" required>
                            </div>
                            <span class="text-gray-700">Laki-Laki</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="gender-ortu"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Perempuan">
                            </div>
                            <span class="text-gray-700">Perempuan</span>
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
                                        name="kewarganegaraan" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="WNI" required>
                            </div>
                            <span class="text-gray-700">WNI</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="kewarganegaraan"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="WNA">
                            </div>
                            <span class="text-gray-700">WNA</span>
                        </label>
                    </div>
                </div>

                <!-- pendidikan field -->
                <div class="">
                    <label for="parent-education">Pendidikan <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="parent-education" id="parent-education" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pendidikan" required> 
                    </label>
                </div>

                <!-- pekerjaan field -->
                <div class="">
                    <label for="job">Pekerjaan <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="job" id="job" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pekerjaan" required> 
                    </label>
                </div>

                <!-- status perkawinan field -->
                <div class="">
                    <label for="perkawinan">Status Perkawinan <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="perkawinan" id="perkawinan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Status Perkawinan" required> 
                    </label>
                </div>

                <!-- No ktp field -->
                <div class="">
                    <label for="no-ktp">No KTP/NIK <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="no-ktp" id="no-ktp" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No KTP/NIK" required> 
                    </label>
                </div>

                <!-- agama field -->
                <div class="">
                    <label for="agama">Agama <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="agama" id="agama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No KTP/NIK" required> 
                    </label>
                </div>

                <!-- alamat field -->
                <div class="">
                    <label for="alamat-ortu">Alamat <span class="text-[#FF0000]">*</span> <br>
                    <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Wringinanom Kecamatan Sambit Kabupaten Ponorogo</span>
                        <textarea name="alamat-ortu" id="alamat-ortu" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat"></textarea> 
                    </label>
                </div>
            </div>
        </div>
       
        <!-- form anak -->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Anak</span>
            
            <!-- form data anak -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- nama anak field -->
                <div class="">
                    <label for="child-name">Nama <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="child-name" id="child-name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama" required> 
                    </label>
                </div>

                <!-- tempat lahir anak field -->
                <div>
                    <label for="tempat-lahir-anak">Tempat Lahir <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-lahir-anak" id="tempat-lahir-anak" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir" required> 
                    </label>
                </div>

                <!-- tanggal lahir anak field -->
                <div class="">
                    <label for="tanggal-lahir-anak">Tanggal Lahir <span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-lahir-anak" id="child-ttl" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required> 
                    </label> 
                </div> 

                <!-- jenis kelamin field -->
                <div class="">
                    <span>Jenis Kelamin <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio" 
                                        name="gender-anak" 
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Laki-Laki" required>
                            </div>
                            <span class="text-gray-700">Laki-Laki</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                        name="gender-anak"  
                                        class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="Perempuan">
                            </div>
                            <span class="text-gray-700">Perempuan</span>
                        </label>
                    </div>
                </div>

                <!-- pendidikan anak field -->
                <div class="">
                    <label for="child-education">Pendidikan <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="child-education" id="child-education" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pendidikan" required> 
                    </label>
                </div>

                <!-- alamat field -->
                <div class="">
                    <label for="alamat-anak">Alamat <span class="text-[#FF0000]">*</span> <br>
                    <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Wringinanom Kecamatan Sambit Kabupaten Ponorogo</span>
                        <textarea name="alamat-anak" id="alamat-anak" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat"></textarea> 
                    </label>
                </div>
            </div>
        </div>
        
        <!-- konfirmasi data -->
        <div>
            <label class=" flex gap-2 items-center font-semibold"> 
                <input type="checkbox" id="confirmCheck" class="w-5 h-5 cursor-pointer"> Apakah data sudah benar?
            </label>
        </div>

        <!-- submit and reset button -->
        <div class="flex gap-6">
            <!-- submit button -->
            <button type="submit" id="submitButton" class=" bg-gray-400 text-white py-2 px-6 rounded-md cursor-not-allowed" disabled>Kirim</button>

            <!-- reset button -->
            <button id="resetButton" type="button" class=" bg-red-600 text-white py-2 px-6 rounded-md">Hapus</button>
        </div>
    </form>
</main>
@include("layouts.footer")