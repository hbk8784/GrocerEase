let sandwi_category = document.getElementById("sandwi-category");
let option = document.getElementById("option");
let person = document.getElementById('person');
let profile_toggle = document.getElementById('profile-toggle');

function show() {
    option.style.display = "block";
}

function hide() {
    option.style.display = "none";
}

function pshow(){
    profile_toggle.style.display = "block";
}

function phide(){
    profile_toggle.style.display = "none";
}
sandwi_category.addEventListener("mouseover", show);
sandwi_category.addEventListener("mouseout", hide);
option.addEventListener("mouseover", show);
option.addEventListener("mouseout", hide);

person.addEventListener('mouseover', pshow);
person.addEventListener('mouseout', phide);
profile_toggle.addEventListener('mouseover', pshow);
profile_toggle.addEventListener('mouseout', phide);
