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
      <div class="banner-0  position_${count}"  >
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