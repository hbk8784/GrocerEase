let sandwi_category = document.getElementById("sandwi-category");
let option = document.getElementById("option");

function show_hide() {
    if (option.style.display === "none") {
        option.style.display = "block";
    } else {
        option.style.display = "none";
    }
}

sandwi_category.addEventListener("click", show_hide);
