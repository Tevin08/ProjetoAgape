function handleCNPJ() {
  let cnpjInput = document.querySelector("#CNPJ");

  if (cnpjInput.value.length < 14) {
    cnpjInput.value = cnpjInput.value
      .replace(/[a-zA-Z\s]/, "")
      .replace(/\D/, "");
  } else {
    cnpjInput.value = cnpjInput.value
      .replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, "$1.$2.$3/$4-$5")
      .slice(0, 18);
  }
}

var openFile = function (file) {
  var input = file.target;
  var reader = new FileReader();
  reader.onload = function () {
    var dataURL = reader.result;
    var output = document.getElementById("output");
    output.src = dataURL;
  };
  reader.readAsDataURL(input.files[0]);
};

let count;
function likeBtn(id) {
  count = 0;
  count++
  let likeBtn = document.querySelector(`.likeBtn-${id}`);
  let like = document.querySelector(`.like-${id}`);
  let countLike = document.querySelector(`.count-like-${id}`);
  like.style.transition = "all 150ms ease";
  like.style.color = "#c79dff";
  countLike.textContent = count;
  likeBtn.setAttribute("onclick", `unlikeBtn(${id})`);
}

function unlikeBtn(id) {
  count--
  let likeBtn = document.querySelector(`.likeBtn-${id}`);
  let like = document.querySelector(`.like-${id}`);
  let countLike = document.querySelector(`.count-like-${id}`);
  like.style.transition = "all 150ms ease";
  like.style.color = "#FFF";
  countLike.textContent = 0;
  likeBtn.setAttribute("onclick", `likeBtn(${id})`);
}
