@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keterangan</span> <br>
            <span class="text-4xl text-secondary">Usaha</span>
        </div>
    </div>

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
                <input type="text" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="RW Anda" required> 
            </label>
        </div>

        <!-- kategori field -->
        <div class="bg-white p-4 w-full rounded-md">
            <span>Jenis Usaha</span> <span class="text-[#FF0000]"> *</span> <br>
            <p class="font-medium">Isi dengan jenis usaha anda. Bisa mengisi lebih dari 1 bidang</p>
            <label for="pertanian"> Pertanian <br>
                <input type="text" name="pertanian" class="w-full my-2 outline-none border-b-2 border-black border-dotted focus:border-solid">
            </label>
            <label for="perindustrian"> Perindustrian <br>
                <input type="text" name="perindustrian" class="w-full my-2 outline-none border-b-2 border-black border-dotted focus:border-solid">
            </label>
            <label for="perdagangan"> Perdagangan <br>
                <input type="text" name="perdagangan" class="w-full my-2 outline-none border-b-2 border-black border-dotted focus:border-solid">
            </label>
            <label for="perternakan"> Perternakan <br>
                <input type="text" name="perternakan" class="w-full my-2 outline-none border-b-2 border-black border-dotted focus:border-solid">
            </label>
            <label for="kerajinan"> Kerajinan <br>
                <input type="text" name="kerajinan" class="w-full my-2 outline-none border-b-2 border-black border-dotted focus:border-solid">
            </label>
            <label for="jasa"> Jasa <br>
                <input type="text" name="jasa" class="w-full my-2 outline-none border-b-2 border-black border-dotted focus:border-solid">
            </label>
            <label for="lainnya"> Lainnya <br>
                <input type="text" name="lainnya" class="w-full my-2 outline-none border-b-2 border-black border-dotted focus:border-solid">
            </label>
        </div>

        <!-- nama-usaha field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nama-usaha">Nama Usaha <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="nama-usaha" id="nama-usaha" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Usaha" required> 
            </label>
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