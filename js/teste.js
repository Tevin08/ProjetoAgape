// let idFollow = "101";




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
