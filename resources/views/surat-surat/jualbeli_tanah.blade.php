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

    <form action="{{ route('jualbeli-tanah.store')}}" method="POST" class="mx-auto my-10 w-11/12 max-w-prose p-4 flex flex-col gap-4 font-sans" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT JUAL BELI TANAH</span>
            <p class="text-[#5F6368] font-normal">(Untuk bukti jual beli tanah)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>


        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Pihak Pertama</span>
        <!-- nama pihak pertama field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nama-pihak-pertama">Nama <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="nama-pihak-pertama" id="nama-pihak-pertama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama pihak pertama" required>
            </label>
        </div>

        <!-- nik-pihak-pertama -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nik-pihak-pertama">NIK<span class="text-[#FF0000]">*</span> <br>
                <input minlength="16" maxlength="16" type="text" name="nik-pihak-pertama" id="nik-pihak-pertama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="nik pihak pertama" required>
            </label>
        </div>

       <!-- alamat-pihak-pertama field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="alamat-pihak-pertama">alamat<span class="text-[#FF0000]">*</span> <br>
                <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Sambiganen Kecamatan Ngrayun Kabupaten Ponorogo</span>
                <textarea name="alamat-pihak-pertama" id="alamat-pihak-pertama" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="alamat"></textarea>
            </label>
        </div>
    </div>
    

        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Pihak kedua</span>
        <!-- name field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nama-pihak-kedua">Nama <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="nama-pihak-kedua" id="nama-pihak-kedua" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama pihak kedua" required>
            </label>
        </div>

        <!-- nik-pihak-kedua -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="nik-pihak-kedua">NIK<span class="text-[#FF0000]">*</span> <br>
                <input minlength="16" maxlength="16" type="text" name="nik-pihak-kedua" id="nik-pihak-kedua" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="nik pihak kedua" required>
            </label>
        </div>

       <!-- alamat-pihak-kedua field -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="alamat-pihak-kedua">alamat <span class="text-[#FF0000]">*</span> <br>
                <span class="font-medium">Untuk penulisan harus seperti berikut tanpa tanda (): RT (RT anda) RW (RW anda) Dukuh (Dukuh anda) Desa Sambiganen Kecamatan Ngrayun Kabupaten Ponorogo</span>
                <textarea name="alamat-pihak-kedua" id="alamat-pihak-kedua" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="alamat"></textarea>
            </label>
        </div>
    </div>


    <div class="bg-white p-4 w-full rounded-md">
    <span class="text-2xl font-medium">Formulir Isi perjanjian</span>
        
        <!-- hari-kesepakatan keramaian field -->
                <div class="">
                    <label for="hari-kesepakatan">hari kesepakatan <span class="text-[#FF0000]">*</span> <br>
                        <input type="date" name="hari-kesepakatan" id="hari-kesepakatan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="" required>
                    </label>
                </div>


        <!-- luas tanahfield -->
                <div class="">
                    <label for="luas">Luas Tanah <span class="text-[#FF0000]">*</span> <br>
                        <input type="number" name="luas" id="luas" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="contoh 5000" required>
                    </label>
                </div>

                
        <!-- luas tanahfield -->
                <div class="">
                    <label for="persil-nomor"> Persil-nomor <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="persil-nomor" id="persil-nomor" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="545898" required>
                    </label>
                </div>

        <!-- field -->
                <div class="">
                    <label for="sppt-nomor">SPPT nomor<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="sppt-nomor" id="sppt-nomor" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="SPPT nomer" required>
                    </label>
                </div>

            <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Batas Tanah</span>

                <div class="">
                    <label for="utara">Batas Utara<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="utara" id="utara" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas utara" required>
                    </label>
                </div>

                <div class="">
                    <label for="timur">Batas Timur<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="timur" id="timur" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas timur" required>
                    </label>
                </div>

                <div class="">
                    <label for="barat">Batas Barat<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="barat" id="barat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas barat" required>
                    </label>
                </div>

                <div class="">
                    <label for="selatan">Batas Selatan<span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="selatan" id="selatan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Batas selatan" required>
                    </label>
                </div>
            </div>

     <!-- Harga field -->
                <div class="">
                    <label for="harga">Harga Tanah <span class="text-[#FF0000]">*</span> <br>
                        <input type="number" name="harga " id="harga " class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="contoh 5000" required>
                    </label>
                </div>

        </div>

        <!-- Submit and Reset Button -->
        @include('components.submit-reset-button')
    </form>
</main>

<!-- Confirmation dialog before sbmit -->
@include('components.confirm')

@include("layouts.footer")