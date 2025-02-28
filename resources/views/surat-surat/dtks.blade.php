@include('layouts.header')
<main class=" font-dusha mt-24 bg-[#F4F7F6]">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Formulir</span> <br>
            <span class="text-4xl text-secondary">DTKS</span>
        </div>
    </div>

    <!-- Alert If the user success sent the data -->
    @include('components.alert')

    <form action="/dtks" method="POST" class="mx-auto my-10 w-11/12 max-w-prose p-4 flex flex-col gap-4 font-sans" id="myForm">
        @csrf
        <div class="bg-white p-4 w-full rounded-md">
            <span class="text-2xl font-medium">FORMULIR PENGISIAN DTKS</span>
            <p class="text-[#FF0000] font-normal">* Menunjukkan pertanyaan yang wajib diisi</p>
        </div>

        <!-- nama -->
        <div class="bg-white p-4 w-full rounded-md">
            <label for="name">Nama <span class="text-[#FF0000]">*</span> <br>
                <input type="text" name="name" id="name" class="w-full mt-2 outline-none border-b-2 border-black border-dotted focus:border-solid" placeholder="Nama Anda" required>
            </label>
        </div>

        <!-- Info counter dan progress bar -->
        <div class="bg-white p-4 w-full rounded-md">
            <div class="flex justify-between items-center mb-2">
                <span>Unggahan Gambar: <span class="upload-counter">0</span>/5</span>
            </div>
            <div class="w-full bg-gray-200 h-2 rounded-full">
                <div class="progress-bar bg-blue-500 h-2 rounded-full" style="width: 0%"></div>
            </div>
        </div>

        <!-- foto ktp -->
        <div class="bg-white p-4 w-full rounded-md">
            <span>Foto KTP <span class="text-[#FF0000]">*</span></span>
            <!-- File Upload ktp -->
            <div class="file-upload-item mt-4">
                <!-- Preview Gambar -->
                <div class="mb-3">
                    <div class="image-preview-container border-2 border-dashed border-gray-300 rounded-lg p-3 text-center h-40 flex items-center justify-center bg-gray-50">
                    <p class="preview-text text-gray-500 text-sm">Preview gambar</p>
                    <img class="image-preview max-h-full max-w-full hidden object-contain" alt="Preview" />
                    </div>
                </div>
                
                <!-- Input File -->
                <div class="mb-2">
                    <div class="flex items-center">
                        <label class="file-label cursor-pointer bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium py-1.5 px-3 rounded-lg mr-2 transition-colors duration-200">
                        Pilih File
                            <input type="file" name="image-ktp" accept="image/jpeg,image/png,image/gif,image/webp" class="image-upload hidden" required/>
                        </label>
                        <span class="file-name text-xs text-gray-500 truncate max-w-[150px]">Belum ada file</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Maks. 5MB</p>
                </div>
                
                <!-- Pesan Error -->
                <div class="error-message hidden bg-red-100 text-red-700 p-2 text-xs rounded-lg mb-2"></div>
            </div>
        </div>

        <!-- foto kk -->
        <div class="bg-white p-4 w-full rounded-md">
            <span>Foto Kartu Keluarga <span class="text-[#FF0000]">*</span></span>
            <!-- File Upload kk -->
            <div class="file-upload-item mt-4">
            <!-- Preview Gambar -->
                <div class="mb-3">
                    <div class="image-preview-container border-2 border-dashed border-gray-300 rounded-lg p-3 text-center h-40 flex items-center justify-center bg-gray-50">
                    <p class="preview-text text-gray-500 text-sm">Preview gambar</p>
                    <img class="image-preview max-h-full max-w-full hidden object-contain" alt="Preview" />
                    </div>
                </div>
            
                <!-- Input File -->
                <div class="mb-2">
                    <div class="flex items-center">
                    <label class="file-label cursor-pointer bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium py-1.5 px-3 rounded-lg mr-2 transition-colors duration-200">
                        Pilih File
                        <input type="file" name="image-kk" accept="image/jpeg,image/png,image/gif,image/webp" class="image-upload hidden" required/>
                    </label>
                    <span class="file-name text-xs text-gray-500 truncate max-w-[150px]">Belum ada file</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Maks. 5MB</p>
                </div>
            
                <!-- Pesan Error -->
                <div class="error-message hidden bg-red-100 text-red-700 p-2 text-xs rounded-lg mb-2"></div>
            </div>
        </div>

        <!-- foto rumah depan -->
        <div class="bg-white p-4 w-full rounded-md">
            <span>Foto Rumah Tampak Depan <span class="text-[#FF0000]">*</span></span>
            <!-- File Upload Item 3 -->
            <div class="file-upload-item mt-4">
                <!-- Preview Gambar -->
                <div class="mb-3">
                    <div class="image-preview-container border-2 border-dashed border-gray-300 rounded-lg p-3 text-center h-40 flex items-center justify-center bg-gray-50">
                        <p class="preview-text text-gray-500 text-sm">Preview gambar</p>
                        <img class="image-preview max-h-full max-w-full hidden object-contain" alt="Preview" />
                    </div>
                </div>
                
                <!-- Input File -->
                <div class="mb-2">
                    <div class="flex items-center">
                        <label class="file-label cursor-pointer bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium py-1.5 px-3 rounded-lg mr-2 transition-colors duration-200">
                            Pilih File
                            <input type="file" name="image-rumah-depan" accept="image/jpeg,image/png,image/gif,image/webp" class="image-upload hidden" required/>
                        </label>
                        <span class="file-name text-xs text-gray-500 truncate max-w-[150px]">Belum ada file</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Maks. 5MB</p>
                </div>
                
                <!-- Pesan Error -->
                <div class="error-message hidden bg-red-100 text-red-700 p-2 text-xs rounded-lg mb-2"></div>
            </div>
        </div>

        <!-- foto rumah belakang -->
        <div class="bg-white p-4 w-full rounded-md">
            <span>Foto Rumah Tampak Belakang <span class="text-[#FF0000]">*</span></span>
            <!-- File Upload Item 4 -->
            <div class="file-upload-item mt-4">
                <!-- Preview Gambar -->
                <div class="mb-3">
                    <div class="image-preview-container border-2 border-dashed border-gray-300 rounded-lg p-3 text-center h-40 flex items-center justify-center bg-gray-50">
                        <p class="preview-text text-gray-500 text-sm">Preview gambar</p>
                        <img class="image-preview max-h-full max-w-full hidden object-contain" alt="Preview" />
                    </div>
                </div>
                
                <!-- Input File -->
                <div class="mb-2">
                    <div class="flex items-center">
                        <label class="file-label cursor-pointer bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium py-1.5 px-3 rounded-lg mr-2 transition-colors duration-200">
                            Pilih File
                            <input type="file" name="image-rumah-belakang" accept="image/jpeg,image/png,image/gif,image/webp" class="image-upload hidden" required/>
                        </label>
                            <span class="file-name text-xs text-gray-500 truncate max-w-[150px]">Belum ada file</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Maks. 5MB</p>
                </div>
                
                <!-- Pesan Error -->
                <div class="error-message hidden bg-red-100 text-red-700 p-2 text-xs rounded-lg mb-2"></div>
            </div>
        </div>

        <!-- foto lantai -->
        <div class="bg-white p-4 w-full rounded-md">
            <span>Foto Lantai <span class="text-[#FF0000]">*</span></span>
            <!-- File Upload Item 5 -->
            <div class="file-upload-item mt-4">
                <!-- Preview Gambar -->
                <div class="mb-3">
                    <div class="image-preview-container border-2 border-dashed border-gray-300 rounded-lg p-3 text-center h-40 flex items-center justify-center bg-gray-50">
                    <p class="preview-text text-gray-500 text-sm">Preview gambar</p>
                    <img class="image-preview max-h-full max-w-full hidden object-contain" alt="Preview" />
                    </div>
                </div>
                
                <!-- Input File -->
                <div class="mb-2">
                    <div class="flex items-center">
                    <label class="file-label cursor-pointer bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium py-1.5 px-3 rounded-lg mr-2 transition-colors duration-200">
                        Pilih File
                        <input type="file" name="image-lantai" accept="image/jpeg,image/png,image/gif,image/webp" class="image-upload hidden" required/>
                    </label>
                    <span class="file-name text-xs text-gray-500 truncate max-w-[150px]">Belum ada file</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Maks. 5MB</p>
                </div>
            
                <!-- Pesan Error -->
                <div class="error-message hidden bg-red-100 text-red-700 p-2 text-xs rounded-lg mb-2"></div>
            </div>
        </div>
        
        <!-- submit and reset button -->
        <div class="flex gap-6">
            <!-- reset button -->
            <button id="resetButton" type="button" class="bg-red-600 text-white py-2 px-6 rounded-md">Hapus</button>
            <!-- submit button -->
            <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-md">Kirim</button>
        </div>
    </form>
</main>


<!-- confirmation dialog before submit -->
@include('components.confirm')

@include('layouts.footer')