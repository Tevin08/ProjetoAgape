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