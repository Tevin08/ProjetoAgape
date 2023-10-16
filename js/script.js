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

var openFile = function(file) {
  var input = file.target;
  var reader = new FileReader();
  reader.onload = function(){
    var dataURL = reader.result;
    var output = document.getElementById('output');
    output.src = dataURL;
  };
  reader.readAsDataURL(input.files[0]);
};
