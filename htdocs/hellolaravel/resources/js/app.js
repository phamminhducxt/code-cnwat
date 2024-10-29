import "./bootstrap";

const modal = document.getElementById("myModal");
const openModal = document.getElementById("btnSubmit");

openModal.addEventListener("click", (event) => {
    modal.style.display = "block";
});
