let sandwi_category = document.getElementById("sandwi-category");
let option = document.getElementById("option");

function show() {
    option.style.display = "block";
}

function hide() {
    option.style.display = "none";
}

sandwi_category.addEventListener("mouseover", show);
sandwi_category.addEventListener("mouseout", hide);
option.addEventListener("mouseover", show);
option.addEventListener("mouseout", hide);
