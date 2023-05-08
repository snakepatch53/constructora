const $header = document.querySelector("header");
const $burger_btn = document.querySelector("#burger-toggle");

window.onscroll = () => (window.scrollY >= 5 ? $header.classList.add("float") : $header.classList.remove("float"));

$burger_btn.onclick = () => $header.classList.toggle("menu-open");
