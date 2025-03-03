document.addEventListener("DOMContentLoaded", function () {
    // function menampilkan tab yang dipilih
    // function showTabFromUrl() {
    const params = new URLSearchParams(window.location.search);
    if (params.has("tab") && params.get("tab") === "persyaratan") {
        toggleTab("persyaratanButton", "persyaratanContent");
    } else if (params.has("tab") && params.get("tab") === "surat") {
        toggleTab("suratButton", "suratContent");
    } else {
        toggleTab("dokumenButton", "dokumenContent");
    }

    // function toggle tab
    function toggleTab(activeButtonId, activeContentId) {
        // Ambil semua tombol dan konten
        const buttons = document.querySelectorAll("button[id$='Button']");
        const contents = document.querySelectorAll("section[id$='Content']");

        // Loop untuk reset semua tombol dan konten
        contents.forEach((content) => {
            content.classList.add("hidden");
        });

        // Loop untuk reset semua tombol
        buttons.forEach((button) => {
            button.classList.add("bg-[#A2A2A2]");
            button.classList.remove("bg-primary", "text-white");
        })

        // Aktifkan tombol dan konten yang dipilih
        document
            .getElementById(activeButtonId)
            .classList.add("bg-primary", "text-white");
        document
            .getElementById(activeButtonId)
            .classList.remove("bg-[#A2A2A2]");
        document.getElementById(activeContentId).classList.remove("hidden");
    }

    // Tambahkan event listener ke setiap tombol
    document
        .getElementById("persyaratanButton")
        .addEventListener("click", () =>
            toggleTab("persyaratanButton", "persyaratanContent")
        );

    document
        .getElementById("suratButton")
        .addEventListener("click", () =>
            toggleTab("suratButton", "suratContent")
        );

    document
        .getElementById("dokumenButton")
        .addEventListener("click", () =>
            toggleTab("dokumenButton", "dokumenContent")
        );
});