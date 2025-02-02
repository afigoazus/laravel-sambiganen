@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keterangan</span> <br>
            <span class="text-4xl text-secondary">Usaha</span>
        </div>
    </div>

    <form action="{{ route('keterangan-usaha.store')}}" method="POST" class="mx-auto my-10 w-11/12 max-w-prose p-4 flex flex-col gap-4 font-sans">
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
            <label for="kategori">Jenis Usaha <span class="text-[#FF0000]">*</span> <br>
                <select name="kategori" id="kategori" class="mt-2 border border-black" required>
                    <option disabled selected>Jenis Usaha</option>
                    <option value="Pertanian">Pertanian</option>
                    <option value="Perindustrian">Perindustrian</option>
                    <option value="Perdagangan">Perdagangan</option>
                    <option value="Perternakan">Perternakan</option>
                    <option value="Kerajinan">Kerajinan</option>
                    <option value="Jasa">Jasa</option>
                    <option value="Lainnya">Lainnya</option>
                </select> 
            </label>
        </div>

        <!-- nama-usaha field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nama-usaha">Nama Usaha <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="nama-usaha" id="nama-usaha" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Usaha" required> 
            </label>
        </div>

        <!-- submit button -->
        <div>
            <button type="submit" class="bg-primary text-white py-2 px-6 rounded-md">Kirim</button>
        </div>
    </form>
</main>
@include("layouts.footer")