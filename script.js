function toggleMenu() {
    var dropdownContent = document.getElementById("myDropdown");
    if (dropdownContent.style.display === "none" || dropdownContent.style.display === "") {
        dropdownContent.style.display = "block";
    } else {
        dropdownContent.style.display = "none";
    }
}

