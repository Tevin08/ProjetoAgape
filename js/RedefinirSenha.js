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

function Verdescricao() {
    const descript = document.querySelector('.btn-id-descricao')
    const containercomments = document.querySelector('.post-coments')
    const containerdescrpt = document.querySelector('.post-descricao')
    const lmais = document.querySelector('.leia-mais')

    descript.textContent = "Ver Comentários";

    descript.setAttribute("onclick", "Vercomments()");

    
      containerdescrpt.style.display = "flex"
      containercomments.style.display = "none"
      lmais.style.display = 'flex'
  

      
    
}

function Vercomments(){

  const descript = document.querySelector('.btn-id-descricao')
  const containercomments = document.querySelector('.post-coments')
  const containerdescrpt = document.querySelector('.post-descricao')
  const lmais = document.querySelector('.leia-mais')

  descript.textContent = "Ver Descrição";
  

  descript .setAttribute("onclick", "Verdescricao()");

  containerdescrpt.style.display = "none"
  containercomments.style.display = "flex"
  lmais.style.display = 'none'

}


function abrirModal(){
  const modal = document.querySelector(".container-post");
  document.body.style.overflow = 'hidden'; 

  modal.style.display = "flex";

}

function fecharModal(){
  const modal = document.querySelector(".container-post");
  document.body.style.overflow = ''; 

  modal.style.display = "none"; 
}