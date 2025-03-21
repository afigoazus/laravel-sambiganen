@include("layouts.header")
<main class="font-dusha mt-24 bg-[#F4F7F6] -mb-9">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Surat</span> <br>
            <span class="text-4xl text-secondary">BBM</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <!-- Print the error to the front-end -->
    @include('components.error')

    <form action="{{ route('bbm.store') }}" method="POST" class="mx-auto my-10 w-11/12 p-4 flex flex-col gap-4 font-sans" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR SURAT BAHAN BAKAR</span>
            <p class="text-[#5F6368] font-normal">(Untuk pengajuan pembelian bahan bakar)</p>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

        <!-- form data diri -->
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">Formulir Data Diri</span>

            <!-- form data diri -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- name field -->
                <div class="">
                    <label for="name">Nama <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="name" id="name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Anda" required>
                    </label>
                </div>

                <!-- nik field -->
                <div class="">
                    <label for="nik">NIK <span class="text-[#FF0000]">*</span> <br>
                        <input minlength="16" maxlength="16" type="text" name="nik" id="nik" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="NIK Anda" required>
                    </label>
                </div>

                <!-- alamat field -->
                <div class="">
                    <label for="alamat">Alamat <span class="text-[#FF0000]">*</span> <br>
                        <textarea name="alamat" id="alamat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" required placeholder="Alamat Anda"></textarea>
                    </label>
                </div>

                <!-- nama usaha field -->
                <div class="">
                    <label for="nama-usaha">Nama Usaha (jika ada) <br>
                        <input type="text" name="nama-usaha" id="nama-usaha" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Usaha">
                    </label>
                </div>

                <!-- Sektor pengguna field -->
                <div class="">
                    <label for="sektor-pengguna">Sektor Konsumen Pengguna <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="sektor-pengguna" id="sektor-pengguna" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Sektor Konsumen Pengguna" required>
                    </label>

                </div>

                <!-- jenis usaha field -->
                <div class="">
                    <label for="jenis-usaha">Jenis Usaha <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="jenis-usaha" id="jenis-usaha" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Jenis Usaha Anda" required>
                    </label>
                </div>

                <!-- no whatsapp -->
                <div class="">
                    <label for="">No Telepon/Whatsapp <span class="text-[#FF0000]">*</span>
                        <input type="text" maxlength="20" name="no-wa" id="no-wa" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="No Telepon/Whatsapp" required>
                    </label>
                </div>
            </div>
        </div>

        <!-- form kebutuhan jenis bbm tertentu -->
        <div class="bg-white w-full p-4 rounded-md">
            <span class="text-2xl font-medium">Formulir Kebutuhan Jenis BBM</span>

            <!-- form jenis mesin -->
            <div class=" grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- jenis mesin -->
                <div>
                    <label for="jenis-mesin">Jenis Mesin/Alat <span class="text-[#FF0000]">*</span>
                        <input disabled value="Diesel" type="text" name="jenis-alat" id="fungsi-alat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Jenis Alat" required>
                    </label>
                </div>

                <!-- jumlah alat -->
                <div>
                    <label for="jumlah-alat">Jumlah Alat/Mesin <span class="text-[#FF0000]">*</span>
                        <input type="number" min="1" max="10" name="jumlah-alat" id="jumlah-alat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Jumlah Alat/Mesin" required>
                    </label>
                </div>

                <!-- fungsi alat -->
                <div>
                    <label for="fungsi-mesin">Fungsi Alat/Mesin <span class="text-[#FF0000]">*</span>
                        <input disabled value="Pertanian Industri" type="text" name="fungsi-alat" id="fungsi-alat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Fungsi Alat/Mesin" required>
                    </label>
                </div>

                <!-- jumlah alat -->
                <div>
                    <label for="jumlah-alat2">Jumlah Alat/Mesin <span class="text-[#FF0000]">*</span>
                        <input type="number" min="1" max="10" name="jumlah-alat2" id="jumlah-alat2" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Jumlah Alat/Mesin" required>
                    </label>
                </div>

                <!-- daya alat -->
                <div>
                    <label for="daya-mesin">Daya Alat/Mesin <span class="text-[#FF0000]">*</span>
                        <input type="number" name="daya-alat" id="daya-alat" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Daya Alat/Mesin" required>
                    </label>
                </div>

                <!-- lama penggunaan -->
                <div>
                    <label for="lama-penggunaan">Lama Penggunaan Alat/Mesin <span class="text-[#FF0000]">*</span> <br>
                        <span class="font-medium">(Jam per hari)</span>
                        <input type="number" min="1" max="24" name="lama-penggunaan" id="lama-penggunaan" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Lama Penggunaan Per Hari" required>
                    </label>
                </div>

                <!-- lama operasional -->
                <div>
                    <label for="lama-operasional">Lama Operasional Alat/Mesin <span class="text-[#FF0000]">*</span> <br>
                        <span class="font-medium">(Hari/Minggu/Bulan)</span>
                        <input type="number" name="lama-operasional" id="lama-operasional" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Lama Operasional" required>
                    </label>
                </div>

                <!-- Konsumsi JBT/JBKP -->
                <div>
                    <label for="konsumsi">Konsumsi JBT/JBKP Alat/Mesin <span class="text-[#FF0000]">*</span> <br>
                        <span class="font-medium">(Liter per minggu/bulan)</span>
                        <input type="number" name="konsumsi" id="konsumsi" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Konsumsi BBM" required>
                    </label>
                </div>
            </div>
        </div>

        <!-- form pemberian jenis bbm -->
        <div class="bg-white w-full p-4 rounded-md">
            <span class="text-2xl font-medium">Diberikan Jenis BBM Tertentu Jenis Minyak Solar ( Gas Oil )</span>

            <!-- form permintaan bbm -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <!-- alokasi volume -->
                <div>
                    <label for="alokasi-volume">Alokasi Volume <span class="text-[#FF0000]">*</span> <br>
                        <span class="font-medium">(Dalam Liter)</span>
                        <input type="number" name="alokasi-volume" id="alokasi-volume" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Alokasi Volume" required>
                    </label>
                </div>

                <!-- tempat pengambilan -->
                <div class="">
                    <span>Tempat Pengambilan <span class="text-[#FF0000]">*</span></span>
                    <div class="flex gap-10 mt-2">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="tempat-pengambilan"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="1" required>
                            </div>
                            <span class="text-gray-700">SPBU Sambit</span>
                        </label>

                        <label class="flex items-start space-x-3 cursor-pointer">
                            <div class="flex-shrink-0 mt-1">
                                <input type="radio"
                                    name="tempat-pengambilan"
                                    class="w-5 h-5 accent-[#0ea5e9] cursor-pointer appearance-none checked:bg-[#0ea5e9] bg-white border border-gray-300 rounded-full" value="2">
                            </div>
                            <span class="text-gray-700">SPBU Nailan</span>
                        </label>
                    </div>
                </div>

                <!-- alat pembelian -->
                <div>
                    <label for="alat-beli">Alat Pembelian Yang Digunakan <span class="text-[#FF0000]">*</span> <br>
                        <input type="text" name="alat-beli" id="alat-beli" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Alat Pembelian Yang Digunakan" required>
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