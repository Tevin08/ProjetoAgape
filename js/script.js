//teste

function uploadimg() {
  const formData = new FormData(document.querySelector("#upload-form"));

  fetch();
}

createElement();
function createElement() {
  const elemment = document.querySelector(".banners");
  let count = 0;

  for (let i = 0; i < 4; i++) {
    count++;
    console.log(count);

    // https://developer.mozilla.org/en-US/docs/Web/API/Element/insertAdjacentHTML
    elemment.insertAdjacentHTML(
      "beforeend",
      `
      <div class="banner-0  position_${count}  " onclick="location.href='PerfilOngs.php' " "  >
        <div class="logos img-back-2" ></div>
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

function modalShow() {
  const modal = document.querySelector(".container-modal");

  modal.style.display = "flex";
}

function modalClose() {
  const modal = document.querySelector(".container-modal");

  modal.style.display = "none";
}


