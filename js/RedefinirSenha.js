function animationbtn() {
  const btn = document.querySelector("#btn-modal-confirm");

  btn.style.width = "50px";
  btn.style.height = "50px";
  btn.style.borderRadius = "50%";
  btn.textContent = "\u2713";

  setTimeout(() => {
    btn.type = "submit";
    btn.click();
  }, 1000);
}

function abrirModal() {
  const modal = document.querySelector(".container-post");
  document.body.style.overflow = "hidden";

  modal.style.display = "flex";
}

function fecharModal() {
  const modal = document.querySelector(".container-post");
  document.body.style.overflow = "";

  modal.style.display = "none";
}
