function modalShow() {
  const modal = document.querySelector(".container-modal");
  document.body.style.overflow = 'hidden'; 

  modal.style.display = "flex";
}

function modalClose() {
  const modal = document.querySelector(".container-modal");
  document.body.style.overflow = ''; 

  modal.style.display = "none";
}

function animationbtn() {
  const btn = document.querySelector("#btn-modal-confirm");

  btn.style.width = "50px";
  btn.style.height = "50px";
  btn.style.borderRadius = "50%";
  btn.textContent = "\u2713";

  setTimeout(() => {
    btn.type = "submit"
    btn.click()
  }, 1000);
}
