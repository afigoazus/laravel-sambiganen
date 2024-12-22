function toggleTab(activeButtonId, inactiveButtonId, activeContentId, inactiveContentId) {
    const activeButton = document.getElementById(activeButtonId);
    const inactiveButton = document.getElementById(inactiveButtonId);
    const activeContent = document.getElementById(activeContentId);
    const inactiveContent = document.getElementById(inactiveContentId);

    // Menyembunyikan konten yang tidak aktif
    inactiveContent.classList.add('hidden');
    inactiveButton.classList.remove('bg-primary', 'text-white');
    inactiveButton.classList.add('bg-[#A2A2A2]');

    // Menampilkan konten yang aktif
    activeContent.classList.remove('hidden');
    activeButton.classList.remove('bg-[#A2A2A2]');
    activeButton.classList.add('bg-primary', 'text-white');
}

function onclickPersyaratan() {
    toggleTab('persyaratanButton', 'dokumenButton', 'persyaratan', 'dokumen');
}

function onclickDokumen() {
    toggleTab('dokumenButton', 'persyaratanButton', 'dokumen', 'persyaratan');
}
