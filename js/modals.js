let modal = document.querySelector(".modal-add-comment");

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

function modalEdit() {
  const modal = document.querySelector(".container-modal");
  document.body.style.overflow = "hidden";
  modal.style.display = "flex";
}

function modalCloseEdit() {
  const modal = document.querySelector(".container-modal");
  modal.style.display = "none";
  document.body.style.overflow = "visible";
}
