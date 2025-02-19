document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("myForm");
    const modal = document.getElementById("confirmModal");
    const confirmBtn = document.getElementById("confirmButton");
    const cancelBtn = document.getElementById("cancelButton");
    let isSubmitting = false;

    // Show modal when form is submitted
    form.addEventListener("submit", function (e) {
        if (!isSubmitting) {
            e.preventDefault();
            modal.classList.remove("hidden");
        }
    });

    // Handle confirm button click
    confirmBtn.addEventListener("click", function () {
        isSubmitting = true;
        modal.classList.add("hidden");
        form.submit();
    });

    // Handle cancel button click
    cancelBtn.addEventListener("click", function () {
        modal.classList.add("hidden");
    });

    // Close modal when clicking outside
    window.addEventListener("click", function (e) {
        if (e.target === modal) {
            modal.classList.add("hidden");
        }
    });

    // Close modal with Escape key
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && !modal.classList.contains("hidden")) {
            modal.classList.add("hidden");
        }
    });

    // Function for reset the form
    function confirmReset() {
        if (confirm("Apakah anda yakin ingin menghapus semua data?")) {
            document.getElementById("myForm").reset();
        }
    }

    // reset button
    document
        .getElementById("resetButton")
        .addEventListener("click", () => confirmReset());
});
