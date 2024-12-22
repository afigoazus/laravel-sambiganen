function toggleDropdown(id) {

    const dropdown = document.getElementById(id)

    dropdown.classList.toggle('hidden');
}

function rotateArrow(id) {
    const div = document.getElementById(id)
    const img = div.querySelector('img')

    img.classList.toggle('rotate-180')
}

function toggleDropdownMenu(id) {
    const parentDiv = document.getElementById(id);
    const dropdowns = parentDiv.querySelectorAll('[id*="dropdown"]');

    parentDiv.classList.toggle('hidden');

    dropdowns.forEach(dropdown => {
        dropdown.classList.add('hidden');
    })
}