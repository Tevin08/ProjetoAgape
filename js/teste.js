function Seguindo() {
  const btnSeguir = document.querySelector(".btn-seguir");
  btnSeguir.classList.add("seguindo");
  btnSeguir.setAttribute("onclick", "Notfollow()");

  setTimeout(() => {
    btnSeguir.textContent = "Seguindo";
  }, 30);
}

function Notfollow() {
  const btnSeguir = document.querySelector(".btn-seguir");
  btnSeguir.classList.remove("seguindo");
  btnSeguir.setAttribute("onclick", "Seguindo()");

  setTimeout(() => {
    btnSeguir.textContent = "Seguir";
    
  }, 30);
}

function Rota1() {
  const btnir = document.querySelector(".btn-visualizar-ongs");

  btnir.setAttribute("onclick", "location.href='verOngs.php'");
  window.location.replace("feed.php");
}

function Rota2() {
  const btnir = document.querySelector(".btn-visualizar-ongs");

  btnir.setAttribute("onclick", "location.href='verOngs-logged.php'");
  window.location.replace("feed.php");
}


