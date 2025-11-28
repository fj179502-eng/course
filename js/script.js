// Select ALL dropdown toggles
const toggles = document.querySelectorAll(".dropdown-toggle");

// Loop for multiple dropdowns
toggles.forEach((toggle) => {
    toggle.addEventListener("click", function () {
        const dropdown = this.nextElementSibling;

        // Toggle only the clicked dropdown
        dropdown.classList.toggle("open");
    });
});

