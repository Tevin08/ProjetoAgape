//teste

function uploadimg() {
  const formData = new FormData(document.querySelector("#upload-form"));

  fetch();
}

createElement();
function createElement() {
  const elemment = document.querySelector(".banners");
  let count = 0;

  for (let i = 0; i < 8; i++) {
    count++;
    console.log(count);

    // https://developer.mozilla.org/en-US/docs/Web/API/Element/insertAdjacentHTML
    elemment.insertAdjacentHTML(
      "beforeend",
      `
      <div class="banner-0 position_${count}">
        <div class="logo-ong img-back-3"></div>
        <h1>Associação vitória:paga meu açai agora!!</h1>
      </div>
    `
    );
    if (count == 4) {
      count = 0;
    }
    // elemment.insertAdjacentHTML("afterbegin", ``)
  }
}
