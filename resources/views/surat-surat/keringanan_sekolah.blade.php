@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Keringanan</span> <br>
            <span class="text-4xl text-secondary">Sekolah</span>
        </div>
    </div>

    <form action="" method="POST" class="mx-auto my-10 w-11/12 max-w-prose p-4 flex flex-col items-center gap-4 font-sans">
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT KERINGANAN SEKOLAH</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan keringanan sekolah)</p> 
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>
        
        <!-- name field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="parent-name">Nama Orang Tua<span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="parent-name" id="parent-name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Orang Tua" required> 
            </label>
        </div>
       
        <!-- ttl ortu field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="parent-ttl">Tempat Tanggal Lahir Orang Tua <span class="text-[#FF0000]">*</span> <br>
                <input type="date" name="parent-ttl" id="parent-ttl" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required> 
            </label> 
        </div>
       
        <!-- pendidikan field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="parent-education">Pendidikan Orang Tua <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="parent-education" id="parent-education" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pendidikan Orang Tua" required> 
            </label>
        </div>

        <!-- pekerjaan field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="job">Pekerjaan Orang Tua <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="job" id="job" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="RW Anda" required> 
            </label>
        </div>

        <!-- status perkawinan field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="perkawinan">Status Perkawinan <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="perkawinan" id="perkawinan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Status Perkawinan" required> 
            </label>
        </div>

        <!-- No ktp field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="no-ktp">No KTP Orang Tua <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="no-ktp" id="no-ktp" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No KTP Orang Tua" required> 
            </label>
        </div>
        
        <!-- dukuh field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="dukuh">Dukuh <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="dukuh" id="dukuh" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Dukuh Anda" required> 
            </label> 
        </div>
       
        <!-- rt field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="rt">RT <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="rt" id="rt" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="RT Anda" required> 
            </label>
        </div>

        <!-- rw field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="rw">RW <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="rw" id="rw" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="RW Anda" required> 
            </label>
        </div>

        <!-- nama anak field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="child-name">Nama Anak <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="child-nama" id="child-name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Anak" required> 
            </label>
        </div>

        <!-- ttl anak field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="child-ttl">Tempat Tanggal Lahir Anak <span class="text-[#FF0000]">*</span> <br>
                <input type="date" name="child-ttl" id="child-ttl" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required> 
            </label> 
        </div>

        <!-- pendidikan anak field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="child-education">Pendidikan Anak <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="child-education" id="child-education" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Pendidikan Anak" required> 
            </label>
        </div>

        <!-- submit button -->
        <div>
            <button type="submit" class="bg-primary text-white py-2 px-6 rounded-md">Kirim</button>
        </div>
    </form>
</main>
@include("layouts.footer")