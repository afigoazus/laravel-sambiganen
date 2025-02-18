document.addEventListener("DOMContentLoaded", function() {
    function confirmReset() {
        if (confirm("Apakah anda yakin ingin menghapus semua data?")) {
           document.getElementById("myForm").reset();
        }
    }

    function confirmData() {
        const checkbox = document.getElementById("confirmCheck");
        const submitButton = document.getElementById("submitButton");

        if (checkbox.checked) {
            submitButton.disabled = false;
            submitButton.classList.remove("bg-gray-400", "cursor-not-allowed");
            submitButton.classList.add("bg-primary");
        } else {
           submitButton.disabled = true;
           submitButton.classList.remove("bg-primary");
           submitButton.classList.add("bg-gray-400", "cursor-not-allowed")
        }
    }

    // reset button
    document.getElementById("resetButton").addEventListener("click", () => confirmReset());

    // submit button
    document.getElementById("confirmCheck").addEventListener("change", () => confirmData());
});