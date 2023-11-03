const checkbox = document.getElementById("meu-checkbox");
const label = document.querySelector(".hoverable-checkbox");

label.addEventListener("mouseenter", () => {
    checkbox.checked = true;
});

label.addEventListener("mouseleave", () => {
    checkbox.checked = false;
});
