<!DOCTYPE html>
<script src="./js/RedefinirSenha.js" defer></script>
<link rel="stylesheet" href="./css/wave.css">
<?php

include "./php/banco.php";

session_start();

$sqlONG = "SELECT * FROM TB_ONG WHERE CD_ONG = {$_GET['id']}";

$_SESSION['get_id_ong'] = $_GET['id'];

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

$row = mysqli_fetch_assoc($conexao -> query($sqlONG));

$_SESSION['nm_ong'] = $row['NM_ONG'];
$_SESSION['cnpj'] = $row['CNPJ'];
$_SESSION['email_ong'] = $row['EMAIL'];
$_SESSION['sobre'] = $row['SOBRE'];
$_SESSION['insta'] = $row['INSTA'];
$_SESSION['wpp'] = $row['WPP'];
$_SESSION['x'] = $row['TWITTER'];
$_SESSION['pic'] = $row['PIC'];


?>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/verOngs.css" />
  <link rel="stylesheet" href="./css/perfil.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <script src="./js/teste.js" defer></script>
  <title>Perfil Ong's</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon" />
  <a target="_blank" href="https://icons8.com/icon/jQKUXMBe9IdN/verified-badge"></a> <a target="_blank" href="https://icons8.com"></a>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
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
                <h2 style="font-weight: 700">Edite seu Perfil</h2>
        <div class="cadas">
                  <form action="./php/dados_ong.php" method="post" class="frmcad-1" enctype="multipart/form-data">
                    <label for="image" id="img_upload">
                      <img src="./imagens/img_upload.png" alt="" width="80px">
                      <h3>Coloque uma imagem</h3>
                    </label>
                    <input type="file" name="image" id="image" onchange="openFile(event)">
                    <img id="output" width="200px">
                    <div class="cad-1">
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
</div>
  <div class="modal-add-comment">
    <form action="./php/comentarios.php" method="post">
      <i onclick="closeComment(event)" class="fa-solid fa-close"></i>
      <label>Adicionar comentário</label>
      <textarea placeholder="Adicione um comentário aqui" name="comentario" cols="30" rows="10"></textarea>
      <button>Comentar</button>
    </form>
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

      <div class="foto-e-info">

        <div class="foto-doador">
          <?php
          if (!isset($_SESSION['pic'])) {
            echo '<img src="./imagens/pfp.jpg" class="img-perfil-ong">';
          } else {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($_SESSION['pic']) . '" class="img-perfil-ong">';
          }
          ?>

          <!-- <div class="img-perfil-ong"></div> -->
        </div>
        <div class="info">
          <div id="nome">
            <p>
              <?php
              if (!isset($_SESSION['nm_ong'])) {
                echo "Médicos sem Fronteiras";
              } else {
                echo $_SESSION['nm_ong'];
              }

              ?>
            </p>
          </div>
          <div id="contato">
            <div class="contato-content">
              <span>
                <?php
                if (!isset($_SESSION['email_ong'])) {
                  echo "Erro";
                } else {
                  echo $_SESSION['email_ong'];
                }
                ?>
              </span>
              <img src="./imagens/icon-verificado.png" alt="" width="40px">
            </div>
            <button onclick="Seguindo()" class="btn-seguir ">
              Seguir
            </button>
          </div>
          
        </div>
      </div>


      <div id="contatos">
        <h4>contatos:</h4>
        <div class="socials">
          <div class="whatsapp">
            <a href="https://api.whatsapp.com/send/?phone=<?php echo $_SESSION['wpp'] ?>&text&type=phone_number&app_absent=0" target="_blank">
            <i class="fa-brands fa-whatsapp fa-shake"></i>
            </a>
            <span> <?php echo $_SESSION['wpp'] ?></span>
          </div>
          <div class="insta">
            <a href="https://instagram.com/<?php echo $_SESSION['insta'] ?>" target="_blank">
            <i class="fa-brands fa-instagram fa-beat"></i>
            </a>
            <span> <?php echo "@" . $_SESSION['insta'] ?> </span>
          </div>
          <div class="twitter">
            <a href="https://twitter.com/<?php echo $_SESSION['x'] ?>" target="_blank">
            <i class="fa-brands fa-x-twitter"></i>
            </a>
            <span> <?php echo "@" . $_SESSION['x'] ?> </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-doados">

    <div class="titulo">
      <h1>Sobre Nós</h1>
    </div>
    <section class="section-sobre">

      <div id="Sobre">
        <p>
          <?php
          echo $_SESSION['sobre'];
          ?>
        </p>
      </div>

    </section>
  </div>
  <section class="section-doados">
    <div class="titulo font">
      <h1>Postagens</h1>
    </div>
    <div class="section-center">


      <div class="container-posts">
        <div class="posts">
          <div class="foto-post"></div>

          <div class="conteudo">
            <h2>Dia do Áçai</h2>
            <p>Hoje aqui, tivemos o dia do açái</p>
          </div>
        </div>

        <div class="posts">
          <div class="foto-post"></div>

          <div class="conteudo">
            <h2>Dia do Áçai</h2>
            <p>Hoje aqui, tivemos o dia do açái</p>
          </div>
        </div>

        <div class="posts">
          <div class="foto-post"></div>

          <div class="conteudo">
            <h2>Dia do Áçai</h2>
            <p>Hoje aqui, tivemos o dia do açái</p>
          </div>
        </div>

        <div class="posts">
          <div class="foto-post"></div>

          <div class="conteudo">
            <h2>Dia do Áçai</h2>
            <p>Hoje aqui, tivemos o dia do açái</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-doados">
    <div class="titulo font">
      <h1>Avaliações</h1>
    </div>
    <div class="section-center">
      <div id="adicionar-coments">
        <button onclick="addComment()" id="btn-add-coments"><img src="./imagens/plus-icon.png" alt=""></button>
        <span>Adicionar Comentário</span>
      </div>
      <div class="container-Comentarios ongs-ajudadas">
        <?php
        while ($dados = $comentarios->fetch_assoc()) {
          echo '<div class="comentarios">';
          echo '<div class="top-comets-content">';
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
          echo '<i class="fa-solid fa-heart"></i>';
          echo '</button>';
          echo '</div>';
          echo '</div>';
        }
        ?>
      </div>
    </div>
  </section>
  <footer>
    <div class="footer-logo">
      <img src="./imagens/logotipo.png" alt="logo" width="500px" />
    </div>
    <div class="footer-socials">
      <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
      <a href="https://x.com" target="_blank"><i class="fa-brands fa-x"></i></a>
    </div>
  </footer>
  <script src="./js/modals.js"></script>
</body>

</html>