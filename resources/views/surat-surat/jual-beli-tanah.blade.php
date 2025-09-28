@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat Perjanjian</span> <br>
            <span class="text-4xl text-secondary">Jual Beli Tanah</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <!-- Print the error to the front-end -->
    @include('components.error')

    <form action="{{ route('jual-beli-tanah.store')}}" method="POST" class="mx-auto my-10 w-11/12 p-4 flex flex-col gap-4 font-sans" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT JUAL BELI TANAH</span>
            <p class="text-[#5F6368] font-normal">(Untuk bukti jual beli tanah)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>


        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Pihak Pertama ( Pembeli )</span>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- nama pihak pertama field -->
                <div class="bg-white w-full rounded-md">
                    <label for="nama-pihak-pertama">Nama <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-pihak-pertama" id="nama-pihak-pertama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama pihak pertama" required>
                    </label>
                </div>

                <div>
                    <label for="tempat-lahir-pihak-pertama">Tempat Lahir<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-lahir-pihak-pertama" id="tempat-lahir-pihak-pertama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir" required>
                    </label>
                </div>

                <div>
                    <label for="tanggal-lahir-pihak-pertama">Tanggal Lahir<span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-lahir-pihak-pertama" id="tanggal-lahir-pihak-pertama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required>
                    </label>
                </div>
    
                <!-- nik-pihak-pertama -->
                <div class="bg-white w-full rounded-md">
                    <label for="nik-pihak-pertama">NIK<span class="text-[#FF0000]">*</span> <br>
                        <input minlength="16" maxlength="16" type="text" name="nik-pihak-pertama" id="nik-pihak-pertama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK pihak pertama" required>
                    </label>
                </div>
    
                <!-- alamat-pihak-pertama field -->
                <div class="bg-white w-full rounded-md col-span-full">
                    <label for="alamat-pihak-pertama">Alamat<span class="text-[#FF0000]">*</span> <br>
                        <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Sambiganen Kecamatan Ngrayun Kabupaten Ponorogo</span>
                        <textarea name="alamat-pihak-pertama" id="alamat-pihak-pertama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="alamat"></textarea>
                    </label>
                </div>
            </div>
        </div>
    
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Pihak Kedua ( Penjual )</span>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- nama pihak kedua field -->
                <div class="bg-white w-full rounded-md">
                    <label for="nama-pihak-kedua">Nama <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-pihak-kedua" id="nama-pihak-kedua" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama pihak kedua" required>
                    </label>
                </div>

                <div>
                    <label for="tempat-lahir-pihak-kedua">Tempat Lahir<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="tempat-lahir-pihak-kedua" id="tempat-lahir-pihak-kedua" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Tempat Lahir" required>
                    </label>
                </div>

                <div>
                    <label for="tanggal-lahir-pihak-kedua">Tanggal Lahir<span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="tanggal-lahir-pihak-kedua" id="tanggal-lahir-pihak-pertama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required>
                    </label>
                </div>
    
                <!-- nik-pihak-kedua-->
                <div class="bg-white w-full rounded-md">
                    <label for="nik-pihak-kedua">NIK<span class="text-[#FF0000]">*</span> <br>
                        <input minlength="16" maxlength="16" type="text" name="nik-pihak-kedua" id="nik-pihak-pertama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK pihak kedua" required>
                    </label>
                </div>
    
                <!-- alamat-pihak-pertama field -->
                <div class="bg-white w-full rounded-md col-span-full">
                    <label for="alamat-pihak-kedua">Alamat<span class="text-[#FF0000]">*</span> <br>
                        <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Sambiganen Kecamatan Ngrayun Kabupaten Ponorogo</span>
                        <textarea name="alamat-pihak-kedua" id="alamat-pihak-kedua" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="alamat"></textarea>
                    </label>
                </div>
            </div>
        </div>

        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Isi perjanjian</span>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- luas tanah field -->
                <div>
                    <label for="luas-tanah">Luas Tanah <span class="text-[#FF0000]">*</span> <br>
                        <input type="number" name="luas-tanah" id="luas" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="contoh 5000" required>
                    </label>
                </div>
                        
                <!-- no persil -->
                <div>
                    <label for="no-persil"> Persil-nomor <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="no-persil" id="no-persil" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="545898" required>
                    </label>
                </div>
    
                <!-- no sppt field -->
                <div>
                    <label for="no-sppt">SPPT nomor<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="no-sppt" id="no-sppt" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="SPPT nomer" required>
                    </label>
                </div>

                
                <!-- no sertifikat field -->
                <div>
                    <label for="no-sertifikat">Sertifikat nomor<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="no-sertifikat" id="no-sertifikat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="SPPT nomer" required>
                    </label>
                </div>
    
                <!-- Harga field -->
                <div class="col-span-full">
                    <label for="harga-tanah">Harga Tanah <span class="text-[#FF0000]">*</span> <br>
                        <input type="number" name="harga-tanah" id="harga-tanah" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="contoh 5000" required>
                    </label>
                </div>
            </div>
        </div>

        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Batas Tanah</span>
            <p class="text-md text-stone-500">(Isi dengan nama pemilik batas tanah)</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <label for="batas-utara">Batas Utara<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="batas-utara" id="batas-utara" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas utara" required>
                    </label>
                </div>
    
                <div>
                    <label for="batas-timur">Batas Timur<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="batas-timur" id="batas-timur" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas timur" required>
                    </label>
                </div>
    
                <div>
                    <label for="batas-barat">Batas Barat<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="batas-barat" id="batas-barat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas barat" required>
                    </label>
                </div>
    
                <div>
                    <label for="batas-selatan">Batas Selatan<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="batas-selatan" id="batas-selatan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas selatan" required>
                    </label>
                </div>
            </div>

        </div>
        
        <!-- Formulir Data Saksi -->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Saksi</span>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- Saksi 1 -->
                <div>
                    <label for="nama-saksi-1">Nama Saksi 1 <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-saksi-1" id="nama-saksi-1" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama saksi pertama" required>
                    </label>
                </div>
    
                <div>
                    <label for="jabatan-saksi-1">Jabatan Saksi 1 <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="jabatan-saksi-1" id="nik-saksi-1" 
                                class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" 
                                placeholder="Jabatan saksi pertama" required>
                    </label>
                </div>
    
                <!-- Saksi 2 -->
                <div>
                    <label for="nama-saksi-2">Nama Saksi 2 <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-saksi-2" id="nama-saksi-2" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama saksi kedua" required>
                    </label>
                </div>
    
                <div>
                    <label for="jabatan-saksi-2">Jabatan Saksi 2 <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="jabatan-saksi-2" id="jabatan-saksi-2"class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" 
                        placeholder="Jabatan saksi kedua" required>
                    </label>
                </div>

                <!-- Saksi 3 -->
                <div>
                    <label for="nama-saksi-3">Nama Saksi 3 <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="nama-saksi-3" id="nama-saksi-3" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama saksi kedua" required>
                    </label>
                </div>
    
                <div>
                    <label for="jabatan-saksi-3">Jabatan Saksi 3 <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="jabatan-saksi-3" id="jabatan-saksi-3"class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" 
                        placeholder="Jabatan saksi kedua" required>
                    </label>
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