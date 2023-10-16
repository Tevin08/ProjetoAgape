<!DOCTYPE html>

<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/cadastro.css" />
  <link rel="stylesheet" href="./css/wave.css" />
  <link rel="stylesheet" href="./css/verOngs.css" />
  <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon" />
  <script src="./js/RedefinirSenha.js"></script>
  <title>Dados da ONG</title>
</head>

<body>
  <!-- <div class="container-modal">
      <div class="modal">
        <form  action="enviar_email.php" method="post">
          <h1>Digite seu email</h1>
          <div class="content-modal">
            <input type="text" name="" id="email" />
            <div class="modal-btns">
              <button type="button" id="btn-modal-cancel" onclick="modalClose()">
                Cancelar
              </button>
              <button id="btn-modal-avancar">Avançar</button>
            </div>
          </div>
        </form>
      </div>
    </div> -->
  <div class="logo-2 center_content">
    <div class="campos">
      <div class="div-forms forms-login dados-form">
        <button class="btn-voltar" onclick="location.href='index.html#div-cad'">
          <img width="35px" src="./imagens/arrow.png" alt="ff" />
        </button>
        <h1 style="font-weight: 700">Preencha os dados da sua ONG</h1>

        <div class="cadas">
          <form action="./php/dados_ong.php" method="post" class="frmcad-1" enctype="multipart/form-data">
            <label for="image" id="img_upload">
              <img src="./imagens/img_upload.png" alt="" width="80px">
              <h3>Coloque uma imagem de sua ONG</h3>
            </label>
            <input type="file" name="image" id="image" onchange="openFile(event)">
            <img id="output" width="200px">
            <div class="cad-1">
              <label for="CNPJ">Fale sobre sua ONG:</label>
              <textarea name="sobre_ong" id="" maxlength="512"></textarea>
              <label for="">WhatsApp da ONG</label>
              <input type="text" placeholder="WhatsApp" name="wpp" id="emailO" />
              <label for="">Instagram da ONG</label>
              <input type="text" placeholder="Instagram" name="insta" id="emailO" />
              <label for="">X da ONG</label>
              <input type="text" placeholder="X" name="x" id="emailO" />
            </div>
            <!-- <a onclick="modalShow()">Esqueceu sua senha?</a> -->
            <button id="btn-doadorC" type="submit">Confirmar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="./js/script.js"></script>
</body>

</html>