const products_container = document.querySelector(
    ".best-seller-container .products-container"
);
const left_button = document.querySelector("#left");
const right_button = document.querySelector("#right");

left_button.addEventListener("click", () => {
    products_container.scrollLeft += 600;
});

right_button.addEventListener("click", () => {
    products_container.scrollLeft -= 600;
});
