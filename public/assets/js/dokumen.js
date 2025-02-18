document.addEventListener("DOMContentLoaded", function() {
    function toggleTab(activeButtonId, activeContentId) {
        // Ambil semua tombol dan konten
        const buttons = document.querySelectorAll("button[id$='Button']");
        const contents = document.querySelectorAll("section[id$='Content']");

        // Loop untuk reset semua tombol dan konten
        buttons.forEach(button => {
            button.classList.remove('bg-primary', 'text-white');
            button.classList.add('bg-[#A2A2A2]');
        });

        contents.forEach(content => {
            content.classList.add('hidden');
        });

        // Aktifkan tombol dan konten yang dipilih
        document.getElementById(activeButtonId).classList.add('bg-primary', 'text-white');
        document.getElementById(activeButtonId).classList.remove('bg-[#A2A2A2]');
        document.getElementById(activeContentId).classList.remove('hidden');
    }

    // Tambahkan event listener ke setiap tombol
    document.getElementById("persyaratanButton").addEventListener("click", () => toggleTab("persyaratanButton", "persyaratanContent"));

    document.getElementById("suratButton").addEventListener("click", () => toggleTab("suratButton", "suratContent"));

    document.getElementById("dokumenButton").addEventListener("click", () => toggleTab("dokumenButton", "dokumenContent"));
});





function showLainnyaField() {
    var alasanSelect = document.getElementById("alasan");
    var otherField = document.getElementById("lainnyaField");
    
    if (alasanSelect.value === "Lainnya") {
        otherField.classList.remove("hidden");
    } else {
        otherField.classList.add("hidden");
    }
}
