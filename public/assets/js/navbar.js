function toggleDropdown(id) {
    const dropdown = document.getElementById(id);

    document.querySelectorAll('[id*="dropdown"]').forEach((el) => {
        if (el.id !== id) {
            el.classList.add("hidden");
        }
    });

    dropdown.classList.toggle("hidden");
}

function rotateArrow(id) {
    document
        .querySelectorAll("nav #hamburger-list img")
        .forEach((img) => img.classList.remove("rotate-180"));

    const div = document.getElementById(id);
    const img = div.querySelector("img");

    if (!div.nextElementSibling.classList.contains("hidden")) {
        img.classList.toggle("rotate-180");
    }
}

function toggleDropdownMenu(id) {
    const parentDiv = document.getElementById(id);
    const dropdowns = parentDiv.querySelectorAll('[id*="dropdown"]');

    parentDiv.classList.toggle("hidden");

    dropdowns.forEach((dropdown) => {
        dropdown.classList.add("hidden");
    });
}

function openDropdown(id) {
    const dropdown = document.getElementById(id);
    const arrowImg = dropdown.previousElementSibling.querySelector("img");
    dropdown.classList.remove("hidden");
    arrowImg.classList.add("rotate-180");
}

function closeDropdown(id) {
    const dropdown = document.getElementById(id);
    const arrowImg = dropdown.previousElementSibling.querySelector("img");
    dropdown.classList.add("hidden");
    arrowImg.classList.remove("rotate-180");
}
