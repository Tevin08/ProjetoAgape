let modal = document.querySelector(".anim");

function addComment() {
  modal.style.display = "flex";
  document.body.style.overflow = "hidden";
}

function closeComment(e) {
  e.preventDefault();
  modal.style.display = "none";
  document.body.style.overflowY = "visible";
}

function modalShow(id) {
  const modal = document.querySelector(`.mdl-${id}`);
  document.body.style.overflow = "hidden";
  modal.style.display = "flex";
}

function modalClose(id) {
  const modal = document.querySelector(`.mdl-${id}`);
  modal.style.display = "none";
  document.body.style.overflow = "visible";
}