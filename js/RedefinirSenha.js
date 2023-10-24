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

function Toggleparts (button) {
    const descript = document.querySelector('.btn-id-descricao')
    const comments = document.querySelector('.btn-id-comments')
    const containercomments = document.querySelector('.post-coments')
    const containerdescrpt = document.querySelector('.post-descricao')


    if (button == 1){

      containerdescrpt.style.display = "flex"
      containercomments.style.display = "none"
      comments.style.background = '#d6d6d6'
      descript.style.background = '#bdbdbd'
    
    }
    else{

      containerdescrpt.style.display = "none"
      containercomments.style.display = "flex"
      console.log('funciona')
      comments.style.background = '#bdbdbd'
      descript.style.background = '#d6d6d6'

    }
}
