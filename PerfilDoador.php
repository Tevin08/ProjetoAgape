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
}

?>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/verOngs.css" />
  <link rel="stylesheet" href="./css/perfil.css" />
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
  <div class="logo-2 center_content">

    <div class="campos">
  
      <div class="div-forms forms-login dados-form" >
    
        <button class="btn-voltar" onclick="modalClose()">
                  <img width="35px" src="./imagens/arrow.png" alt="ff" />
                </button>
                <h1 style="font-weight: 700">Edite seu Perfil</h1>
        <div class="cadas">
                  <form action="./php/dados_ong.php" method="post" class="frmcad-1" enctype="multipart/form-data">
                    <label for="image" id="img_upload">
                      <img src="./imagens/img_upload.png" alt="" width="80px">
                      <h3>Coloque uma imagem</h3>
                    </label>
                    <input type="file" name="image" id="image" onchange="openFile(event)">
                    <img id="output" width="200px">
                    <div class="cad-1">
                     <div class="input-edit-name">
                      <label for="name">Editar Nome do Perfil</label>
                      <input type="text" name='name' id='input-edit-name'>
                      <label for="name">Editar Nome do Perfil</label>
                      <input type="text" name='name' id='input-edit-name'>
                      <label for="name">Editar Nome do Perfil</label>
                      <input type="text" name='name' id='input-edit-name'>
                     </div>
                    </div>
                    <!-- <a onclick="modalShow()">Esqueceu sua senha?</a> -->
                    <button id="btn-doadorC" type="submit">Confirmar</button>
                  </form>
                </div>
      </div>
    </div>
  </div>
</div>
</div>
<nav id="nav-ongs">
    <img src="imagens/logo.png" onclick="location.href='index.html'" alt="logtipo" width="7%" id="logo" />
    <div class="input-nav">
      <button class=" btn-visualizar-ongs"  onclick="location.href='verongs.php'">
        Visualizar ONG'S
      </button>
      <button class="feed-btn" onclick="Rota2()">
        Feed
      </button>
      <button class="btn-perfil" onclick="location.href='PerfilDoador.php'">
        Seu Perfil
        </button>

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

        <div class="foto-doador">
          <div class=" img-perfil-doador"></div>
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
        <div class="comentarios">
          <div class="top-comets-content">

            <div class="foto-user-comentario"></div>
            <h1><?php echo $_SESSION['nm_doador'] ?></h1>
          </div>

          <div class="comentario-text">
            <p>
              Gostaria de elogiar a ONG por seu trabalho excepcional em prol das crianças ao redor do mundo. Esta organização tem se dedicado incansavelmente a melhorar a vida de crianças em situações vulneráveis, proporcionando-lhes acesso à educação, cuidados de saúde e apoio emocional.
            </p>
          </div>
          <div class="reactions-button-group">
            <button id="like-Button">
              <i class="fa-solid  fa-heart"></i>
            </button>

          </div>
        </div>
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
<footer></footer>

</html>