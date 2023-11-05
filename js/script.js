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

function openFile(file) {
  let input = file.target;
  let reader = new FileReader();
  reader.onload = function () {
    let dataURL = reader.result;
    let output = document.querySelector(".output");
    output.src = dataURL;
  };
  reader.readAsDataURL(input.files[0]);
};

function openFileEdit(file) {
  let input = file.target;
  let reader = new FileReader();
  reader.onload = function () {
    let dataURL = reader.result;
    let output = document.querySelector(".outputEdit");
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

function Vercomments(id){
  const toggleBtn = document.querySelector(`.ver-${id}`)
  const containercomments = document.querySelector(`.cmts-${id}`)
  const containerdescrpt = document.querySelector(`.ds-${id}`)

  toggleBtn.textContent = "Ver Descrição";

  toggleBtn.setAttribute("onclick", `Verdescricao(${id})`);

  containerdescrpt.style.display = "none"
  containercomments.style.display = "block"
}

function Verdescricao(id) {
  const toggleBtn = document.querySelector(`.ver-${id}`);
  const containercomments = document.querySelector(`.cmts-${id}`)
  const containerdescrpt = document.querySelector(`.ds-${id}`)

  toggleBtn.textContent = "Ver Comentários";

  toggleBtn.setAttribute("onclick", `Vercomments(${id})`);

  containerdescrpt.style.display = "flex";
  containercomments.style.display = "none";
}