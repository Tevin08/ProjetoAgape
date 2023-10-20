createElement();
function createElement() {
  const elemment = document.querySelector(".banners-2");
  let count = 0;

  for (let i = 0; i < 4; i++) {
    count++;
    console.log(count);

    // https://developer.mozilla.org/en-US/docs/Web/API/Element/insertAdjacentHTML
    elemment.insertAdjacentHTML(
      "beforeend",
      `
      <div class="banner-0  position_${count}"  onclick="location.href='PerfilOngs.php' "  >
        <div class="logos img-back-2"></div>
        <h1>Médicos sem fronteiras</h1>
      </div>
    `
    );
    if (count == 4) {
      count = 0;
    }
    // elemment.insertAdjacentHTML("afterbegin", ``)
  }
}

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
const heart = document.querySelector(".fa-heart");

heart.addEvent.Listener('click', function love(){

  heart.classList.toggle('loved')
  
})

 

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
