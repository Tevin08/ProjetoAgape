<!DOCTYPE html>

<?php
require 'mailer/PHPMailerAutoload.php';
session_start();

if (isset($_SESSION['id_user'])) {
  header('location: verOngs.php');
  exit();
}

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'GalaxiaZern14@gmail.com';
$mail->Password = 'nuggets0809';
$mail->Port = 587;

$mail->setFrom('GalaxiaZern14@gmail.com');
$mail->addReplyTo('GalaxiaZern114@gmail.com');
$mail->addAddress('estevaopsg08@gmail.com', 'DÓRIA' );
$mail->addAddress('estevaopsg08@gmail.com', 'BAtata');
$mail->addCC('estevaopsg08@gmail.com', 'Cópia');
$mail->addBCC('estevaopsg08@gmail.com', 'Cópia Oculta');
0
$mail->isHTML(true);
$mail->Subject = 'Assunto do email';
$mail->Body    = 'Quem ta lendo come o <b>Dória</b>';
$mail->AltBody = 'garganta';
$mail->addAttachment('./imagens/icon-coracao.png', 'coração.png');

if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}
?>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/cadastro.css" />
  <link rel="stylesheet" href="./css/wave.css" />
  <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon" />
  <script src="./js/RedefinirSenha.js"></script>
  <script src="./js/script.js"></script>
  <title>Login ONG'S</title>
</head>

<body>
  <div class="container-modal">
    <div class="modal">
      <form action="enviar_email.php" method="post">
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
  </div>
  <div class="logo-2 center_content">
    <div class="campos">
      <div class="div-forms forms-login">
        <button class="btn-voltar" onclick="location.href='index.html#div-cad'">
          <img width="35px" src="./imagens/arrow.png" alt="ff" />
        </button>
        <h1 style="font-weight: 700">Bem-Vindo ao Projeto Ágape</h1>
        <h3>Preencha os dados a seguir</h3>

        <div class="cadas">
          <form action="./php/loginONG.php" method="post" class="frmcad-1">
            <div class="cad-1">
              <label for="CNPJ">Digite seu CNPJ</label>
              <input type="text" placeholder="CNPJ" oninput="handleCNPJ()" name="login" id="CNPJ" />
              <label for="">Digite sua senha</label>
              <input type="password" placeholder="senha" name="senha" id="senha" />
            </div>
            <div class="ls">
              <input type="checkbox" name="lembrarsenha" id="lembrarsenha" />

              <label id="lbl_ls" for="lembrarsenha">lembrar minha senha
              </label>
            </div>
            <!-- <a onclick="modalShow()">Esqueceu sua senha?</a> -->
            <button id="btn-doadorC" type="submit">Acessar</button>
            <p class="cad-link">Não possui uma conta? <a href="./cadastroONgs.php">Cadastre-se aqui</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>