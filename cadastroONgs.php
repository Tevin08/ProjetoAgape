<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (isset($_SESSION['id_user'])) {
  header('location: verOngs.php');
  exit();
}
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro ONG'S</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/cadastro.css" />
  <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon" />
</head>

<body>
  <div class="logo-2 center_content">
    <div class="campos">
      <div class="div-forms">
        <button class="btn-voltar" onclick="location.href='index.html#div-cad'">
          <img width="35px" src="./imagens/arrow.png" alt="ff" />
        </button>
        <h1 style="font-weight: 700">Bem-Vindo ao Projeto Ágape</h1>
        <h3>Preencha os dados a seguir</h3>

        <div class="cadas">
          <form action="./php/cadastroOng.php" method="post" class="frmcad-1">
            <div class="cadins">
              <div class="cad-1">
                <label for="nome-C">Digite o nome da ONG</label>
                <input type="text" name="nome-ong" placeholder="Nome da ONG" id="NomeONG" />
                <label for="CNPJ">Digite o CNPJ</label>
                <input type="text" placeholder="CNPJ" name="CNPJ" oninput="handleCNPJ()" id="CNPJ" />
                <label for="">Digite seu Email</label>
                <input type="text" placeholder="Email" name="email" id="emailO" />
              </div>

              <div class="cad-2">
                <label for="">Digite o nome do Representante</label>
                <input type="text" placeholder="Nome do representante" name="nome-representante" id="NomeR" />
                <label for="">Crie uma Senha</label>
                <input type="password" placeholder="senha" name="senha" id="senhaO" />
                <label for="">Confirme sua senha</label>
                <input type="password" placeholder="Confirmar senha" name="senha2" id="senha2" />
              </div>
            </div>
            <div class="ls">
              <input type="checkbox" name="lembrarsenha" id="lembrarsenha" />

              <label id="lbl_ls" for="lembrarsenha">lembrar minha senha
              </label>
            </div>
            <button id="btn-doadorC" type="submit">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="./js/script.js"></script>
</body>

</html>