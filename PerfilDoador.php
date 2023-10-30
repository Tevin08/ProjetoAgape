<!DOCTYPE html>
<?php

include "./php/banco.php";

session_start();

if (!isset($_SESSION['documento'])) {
  header('location: ./logindoador.php');
  exit;
}
$doadores = doadores($conexao);
function doadores($conexao)
{
  $sqlBusca = "SELECT * FROM TB_DOADOR WHERE CD_DOADOR = {$_SESSION['id_doador']}";
  $resultado = mysqli_query($conexao, $sqlBusca);
  return $resultado;
}

$comentarios = comentarios($conexao);
function comentarios($conexao)
{
  $sqlBusca = "SELECT TB_COMMENT.CD_COMMENT, TB_COMMENT.CD_DOADOR, TB_DOADOR.CD_DOADOR, TB_DOADOR.NM_DOADOR, TB_COMMENT.TEXTO_COMMENT
  FROM TB_COMMENT
  JOIN TB_DOADOR ON TB_COMMENT.CD_DOADOR = TB_DOADOR.CD_DOADOR;
  ";
  $resultado = mysqli_query($conexao, $sqlBusca);
  return $resultado;
}

while ($dados = $doadores->fetch_assoc()) {
  $_SESSION['nm_doador'] = $dados['NM_DOADOR'];
  $_SESSION['email'] = $dados['EMAIL'];
  $_SESSION['nm_user'] = $dados['NM_USER'];
  $_SESSION['documento'] = $dados['DOCUMENTO'];
  $_SESSION['foto'] = $dados['FOTO'];
}

?>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/verOngs.css" />
  <link rel="stylesheet" href="./css/perfil.css" />
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/wave.css">
  <script src="./js/RedefinirSenha.js"></script>
  <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon">
  <script src="./js/teste.js" defer></script>
  <title>Perfil Doador</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3552f262a9.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-modal">
    <div class="modal-comentarios">
      <div class="div-forms forms-login dados-form">
        <div class="seta-voltar">

          <button class="btn-voltar" onclick="modalClose()">
            <img width="35px" src="./imagens/arrow.png" alt="ff" />
          </button>
        </div>
        <div class="cadas">
          <form action="./php/update.php" method="post" class="cad-edit" enctype="multipart/form-data">
            <h2 style="font-weight: 700">Edite seu Perfil</h2>
            <label for="image" id="img_upload">
              <img src="./imagens/img_upload.png" alt="" width="80px">
              <h3>Coloque uma imagem</h3>
            </label>
            <input type="file" name="image" id="image" onchange="openFile(event)">
            <img id="output" width="200px">
            <div class="edit-inputs">
              <div class="input-edit-perfil">

                <label for="name">Editar Nome do Perfil</label>
                <input type="text" name='name' id='input-edit-name'>
              </div>

              <div class="input-edit-perfil">

                <label for="name">Editar Email</label>
                <input type="text" name='email' id='input-edit-name'>
              </div>

            </div>
            <!-- <a onclick="modalShow()">Esqueceu sua senha?</a> -->
            <button id="btn-doadorC" type="submit">Confirmar</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <nav id="nav-ongs">
    <img src="imagens/logo.png" onclick="location.href='index.html'" alt="logtipo" width="7%" id="logo" />
    <div class="input-nav">
      <button class=" btn-visualizar-ongs" onclick="location.href='verongs.php'">
        Visualizar ONG'S
      </button>
      <button class="feed-btn" onclick="Rota2()">
        Feed
      </button>
      <?php
      if (isset($_SESSION["id_doador"])) {
        echo '<button class="btn-perfil" onclick="location.href=`PerfilDoador.php`">';
        echo 'Meu perfil';
        echo '</button>';
      }
      ?>

      <?php
      if (isset($_SESSION["id_ong"])) {
        echo '<button class="btn-perfil minha-ong-btn" onclick="location.href=`./MinhaOng.php`">';
        echo 'Minha ONG';
        echo '</button>';
      }
      ?>
    </div>
    <?php
    if (!(isset($_SESSION['documento']) || isset($_SESSION['cnpj']))) {
      echo '<button id="btn-entrar" onclick="location.href=`index.html#div-cad`">';
      echo 'Entrar';
      echo '</button>';
    } else {
      echo '<button id="btn-sair" onclick="location.href=`./php/logout.php`">';
      echo 'Sair';
      echo '</button>';
    }

    ?>
  </nav>
  <section class="section-center">


    <div class="perfil">
      <div class="foto-e-info-doador">

      <div class="div-img-perfil-ong">

        <?php
        if (!isset($_SESSION['foto'])) {
          echo '<img src="./imagens/pfp.jpg" class="img-perfil-ong">';
        } else {
          echo '<img src="data:image/jpeg;base64,' . base64_encode($_SESSION['foto']) . '" class="img-perfil-ong" width="250px">';
        }
        ?>
      </div>
        <div class="info">

          <div id="nome">
            <p>
              <?php

              echo $_SESSION['nm_doador'];

              ?>
            </p>
          </div>
          <div id="contato">
            <span>
              <?php
              echo $_SESSION['email'];
              ?>
            </span>
          </div>
          <div id="contato">
            <span>
              <?php
              echo "@" . $_SESSION['nm_user'];
              ?>
            </span>
          </div>

          <button id='btn-edit-perfil' onclick="modalShow()">
            <i class="fa-regular fa-pen-to-square"></i>
            Editar Perfil
          </button>
        </div>
      </div>



    </div>
  </section>

  <!-- <section class="section-doados">
    <div class="titulo">
      <h1>ONG's que você ajudou</h1>
    </div>
    <div class="section-center">
      <div class="banners-2 ongs-ajudadas">

      </div>
    </div>
  </section> -->
  <section class="section-doados">
    <div class="titulo">
      <h1>Comentários Realizados</h1>
    </div>
    <div class="section-center">
      <div class="container-Comentarios ongs-ajudadas">
        <?php
        while ($dados = $comentarios->fetch_assoc()) {
          echo '<div class="comentarios">';
          echo '<div class="top-comets-content">';
          echo '';
          echo '<div class="foto-user-comentario"></div>';
          echo "<h1>{$dados['NM_DOADOR']}</h1>";
          echo '</div>';
          echo '<div class="comentario-text">';
          echo '<p>';
          echo "{$dados['TEXTO_COMMENT']}";
          echo '</p>';
          echo '</div>';
          echo '<div class="reactions-button-group">';
          echo '<button id="like-Button">';
          echo '<i class="fa-solid  fa-heart" onclick="love()"></i>';
          echo '</button>';
          echo '';
          echo '</div>';
          echo '</div>';
        }
        ?>
      </div>
    </div>
  </section>

</body>
<footer>
  <div class="footer-logo">
    <img src="./imagens/logotipo.png" alt="logo" width="500px" />
  </div>
  <div class="footer-socials">
    <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
    <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    <a href="https://youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
    <a href="https://x.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
  </div>
</footer>

</html>