@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat</span> <br>
            <span class="text-4xl text-secondary">BBM</span>
        </div>
    </div>

    <form action="" method="POST" class="mx-auto my-10 w-11/12 max-w-prose p-4 flex flex-col items-center gap-4 font-sans">
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT BAHAN BAKAR</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan pembelian bahan bakar)</p> 
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>
        
        <!-- name field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="name">Nama <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="name" id="name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Anda" required> 
            </label>
        </div>

        <!-- nik field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nik">NIK <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Anda" required> 
            </label> 
        </div>
       
        <!-- alamat field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="alamat">Alamat <span class="text-[#FF0000]">*</span> <br>
                <textarea name="alamat" id="alamat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat Anda"></textarea> 
            </label>
        </div>

        <!-- nama usaha field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nama-usaha">Nama Usaha (jika ada) <br>
                <input type="text" name="nama-usaha" id="nama-usaha" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Usaha" > 
            </label>
        </div>

        <!-- Sektor pengguna field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="sektor-pengguna">Sektor Konsumen Pengguna <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="sektor-pengguna" id="sektor-pengguna" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Sektor Konsumen Pengguna" required> 
            </label>
        </div>

        <!-- jenis usaha field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="jenis-usaha">Jenis Usaha <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="jenis-usaha" id="jenis-usaha" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Jenis Usaha Anda" required> 
            </label>
        </div>
        <div>
            <button type="submit" class="bg-primary text-white py-2 px-6 rounded-md">Kirim</button>
        </div>
    </form>
</main>
@include("layouts.footer")