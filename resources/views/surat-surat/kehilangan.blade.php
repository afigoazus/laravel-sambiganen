@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keterangan</span> <br>
            <span class="text-4xl text-secondary">Kehilangan</span>
        </div>
    </div>

    <form action="{{ route('kehilangan.store')}}" method="POST" class="mx-auto my-10 w-11/12 max-w-prose p-4 flex flex-col gap-4 font-sans">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT KETERANGAN KEHILANGAN</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan kehilangan barang)</p> 
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>
        
        <!-- name field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="name">Nama <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="name" id="name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Anda" required> 
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
        <div class="bg-white p-4 w-full rounded-md">
            <label for="status-perkawinan">Status Perkawinan <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="status-perkawinan" id="status-perkawinan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Status Perkawinan Anda" required> 
            </label>
        </div>

        <!-- pekerjaan field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="pekerjaan">Pekerjaan <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="pekerjaan" id="pekerjaan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pekerjaan Anda" required> 
            </label>
        </div>

        <!-- pendidikan field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="pendidikan">Pendidikan <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="pendidikan" id="pendidikan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pendidikan Terakhir Anda" required> 
            </label>
        </div> 

        <!-- nik field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nik">NIK <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Anda" required> 
            </label>
        </div> 
        
        <!-- no kk field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="no-kk">No KK <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="no-kk" id="no-kk" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No KK Anda" required> 
            </label>
        </div>

        <!-- alamat field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="alamat">Alamat <span class="text-[#FF0000]">*</span> <br>
            <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Wringinanom Kecamatan Sambit Kabupaten Ponorogo</span>
                <textarea name="alamat" id="alamat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat"></textarea> 
            </label>
        </div>

        <!-- barang hilang field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="barang-hilang">Barang Yang Hilang <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="barang-hilang" id="barang-hilang" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Barang Yang Hilang" required> 
            </label>
        </div>
        
        <!-- submit button -->
        <div>
            <button type="submit" class="bg-primary text-white py-2 px-6 rounded-md">Kirim</button>
        </div>
    </form>
</main>
@include("layouts.footer")