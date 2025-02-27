document.addEventListener("DOMContentLoaded", function() {
    // Daftar MIME types yang diizinkan
    const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    // Ukuran maksimum file dalam bytes (5MB)
    const maxSize = 5 * 1024 * 1024;
    let uploadCount = 0;
    const progressBar = document.querySelector('.progress-bar');
    const uploadCounter = document.querySelector('.upload-counter');
    
    // Fungsi untuk inisialisasi event listener pada file upload item
    function initFileUploadItem(fileUploadItem) {
      const imageUpload = fileUploadItem.querySelector('.image-upload');
      const fileName = fileUploadItem.querySelector('.file-name');
      const previewText = fileUploadItem.querySelector('.preview-text');
      const imagePreview = fileUploadItem.querySelector('.image-preview');
      const errorMessage = fileUploadItem.querySelector('.error-message');
      
      // Event listener untuk file input
      imageUpload.addEventListener('change', function() {
        // Reset pesan error
        errorMessage.classList.add('hidden');
        errorMessage.textContent = '';
        
        if (this.files && this.files[0]) {
          const file = this.files[0];
          
          // Validasi tipe file
          if (!allowedTypes.includes(file.type)) {
            errorMessage.textContent = 'Hanya file gambar yang diperbolehkan';
            errorMessage.classList.remove('hidden');
            resetFileInput(fileUploadItem);
            return;
          }
          
          // Validasi ukuran file
          if (file.size > maxSize) {
            errorMessage.textContent = 'Ukuran file maksimal 5MB';
            errorMessage.classList.remove('hidden');
            resetFileInput(fileUploadItem);
            return;
          }
          
          // Update nama file
          fileName.textContent = file.name;
          
          // Tambah counter upload jika file baru
          if (!imagePreview.classList.contains('show-preview')) {
            updateUploadCounter(1);
          }
          
          // Tampilkan preview
          const reader = new FileReader();
          reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('hidden');
            imagePreview.classList.add('show-preview');
            previewText.classList.add('hidden');
          }
          reader.readAsDataURL(file);
        } else {
          if (imagePreview.classList.contains('show-preview')) {
            updateUploadCounter(-1);
          }
          resetFileInput(fileUploadItem);
        }
      });
    }
    
    // Fungsi untuk mereset file input
    function resetFileInput(fileUploadItem) {
      const fileName = fileUploadItem.querySelector('.file-name');
      const imagePreview = fileUploadItem.querySelector('.image-preview');
      const previewText = fileUploadItem.querySelector('.preview-text');
      const imageUpload = fileUploadItem.querySelector('.image-upload');
      
      fileName.textContent = 'Belum ada file';
      imagePreview.src = '';
      imagePreview.classList.add('hidden');
      imagePreview.classList.remove('show-preview');
      previewText.classList.remove('hidden');
      imageUpload.value = '';
    }
    
    // Fungsi untuk update counter dan progress bar
    function updateUploadCounter(change) {
      if (change > 0) {
        // Jika menambah file
        if (uploadCount < 5) {
          uploadCount += change;
        }
      } else {
        // Jika mengurangi/reset file
        if (uploadCount > 0) {
          uploadCount += change; // change adalah nilai negatif
        }
      }
      
      // Update UI
      uploadCounter.textContent = uploadCount;
      const progressPercent = (uploadCount / 5) * 100;
      progressBar.style.width = `${progressPercent}%`;
    }
    
    // Inisialisasi semua file upload item yang ada
    document.querySelectorAll('.file-upload-item').forEach(function(item) {
      initFileUploadItem(item);
    });
    
    // Reset Button Handler
    document.getElementById('resetButton').addEventListener('click', function() {
      // Reset semua file input
      document.querySelectorAll('.file-upload-item').forEach(function(item) {
        const imagePreview = item.querySelector('.image-preview');
        // Hanya kurangi counter jika preview sedang ditampilkan
        if (imagePreview.classList.contains('show-preview')) {
          updateUploadCounter(-1);
        }
        resetFileInput(item);
      });
      
      // Reset nama input
      document.getElementById('name').value = '';
      
      // Reset error messages
      document.querySelectorAll('.error-message').forEach(function(item) {
        item.classList.add('hidden');
        item.textContent = '';
      });
      
      // Reset counter dan progress bar
      uploadCount = 0;
      uploadCounter.textContent = '0';
      progressBar.style.width = '0%';
    });
    
    // Event listener untuk form submit
    document.querySelector('#myForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      let hasError = false;
      
      // Verifikasi nama
      const nameInput = document.getElementById('name');
      if (!nameInput.value.trim()) {
        hasError = true;
      }
      
      // Verifikasi unggahan gambar
      if (uploadCount === 0) {
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(function(errorMsg) {
          errorMsg.textContent = "Wajib mengunggah gambar";
          errorMsg.classList.remove('hidden');
        });
        hasError = true;
      }
      
      if (!hasError) {
        alert(`Form valid! ${uploadCount} gambar siap untuk diunggah.`);
        // this.submit(); // Uncomment ini untuk submit form sesungguhnya
      }
    });
});