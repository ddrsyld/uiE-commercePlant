// navbar
const header = document.querySelector("nav");

window.addEventListener("scroll", function () {
    header.classList.toggle("bg-success", window.scrollY > 0);
});
