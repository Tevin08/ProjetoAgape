function modalShow() {
  const modal = document.querySelector(".container-modal");

  modal.style.display = "flex";
}

function modalClose() {
  const modal = document.querySelector(".container-modal");

  modal.style.display = "none";
}

function animationbtn() {
  const btn = document.querySelector("#btn-modal-confirm");
  btn.style.width = "50px";
  btn.style.height = "50px";
  btn.style.borderRadius = "50%";
  btn.textContent = "\u2713";
  setInterval(() => {
    btn.type = "submit";

  }, 30);
  
}
