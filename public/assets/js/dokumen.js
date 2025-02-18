function toggleTab(activeButtonId, inactiveButtonIds, activeContentId, inactiveContentIds) {
    const activeButton = document.getElementById(activeButtonId);
    const activeContent = document.getElementById(activeContentId);

    // menampilkan konten aktif
    activeButton.classList.add('bg-primary', 'text-white')
    activeButton.classList.remove('bg-[#A2A2A2]');
    activeContent.classList.remove('hidden')

    // menyembunyikan konten tidak aktif
    inactiveButtonIds.forEach(buttonId => {
        const button = document.getElementById(buttonId)
        if(button) {
            button.classList.remove('bg-primary', 'text-white')
            button.classList.add('bg-[#A2A2A2]')
        }
    });

    inactiveContentIds.forEach(contentId => {
        const content = document.getElementById(contentId)
        if(content) {
            content.classList.add('hidden')
        }
    })
}

function onclickPersyaratan() {
    toggleTab('persyaratanButton', ['dokumenButton', 'suratButton'], 'persyaratan', ['dokumen', 'surat']);
}

function onclickDokumen() {
    toggleTab('dokumenButton', ['persyaratanButton', 'suratButton'], 'dokumen', ['persyaratan', 'surat']);
}

function onclickSurat() {
    toggleTab('suratButton', ['persyaratanButton', 'dokumenButton'], 'surat', ['persyaratan', 'dokumen'])
}

function showLainnyaField() {
    var alasanSelect = document.getElementById("alasan");
    var otherField = document.getElementById("lainnyaField");
    
    if (alasanSelect.value === "Lainnya") {
        otherField.classList.remove("hidden");
    } else {
        otherField.classList.add("hidden");
    }
}
