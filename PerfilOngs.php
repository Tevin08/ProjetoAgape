<!DOCTYPE html>
<script src="./js/RedefinirSenha.js" defer></script>
<link rel="stylesheet" href="./css/wave.css">
<?php

include "./php/banco.php";

session_start();

if (!isset($_GET['id'])) {
  header('location: ./verOngs.php');
  exit;
}

if (isset($_SESSION['id_ong'])) {
  if ($_SESSION['id_ong'] === $_GET['id']) {
    header('location: ./MinhaOng.php');
    exit;
  }
}

$sqlONG = "SELECT * FROM TB_ONG WHERE CD_ONG = {$_GET['id']}";

$_SESSION['get_id_ong'] = $_GET['id'];

$comentarios = comentarios($conexao);
function comentarios($conexao)
{
  $sqlBusca = "SELECT TB_COMMENT.CD_COMMENT, TB_COMMENT.CD_DOADOR, TB_DOADOR.CD_DOADOR, TB_DOADOR.NM_DOADOR, TB_COMMENT.TEXTO_COMMENT, TB_COMMENT.CD_ONG, TB_DOADOR.FOTO
  FROM TB_COMMENT
  JOIN TB_DOADOR ON TB_COMMENT.CD_DOADOR = TB_DOADOR.CD_DOADOR
  JOIN TB_ONG ON TB_ONG.CD_ONG = TB_COMMENT.CD_ONG WHERE TB_COMMENT.CD_ONG = {$_GET['id']};
  ";
  $resultado = mysqli_query($conexao, $sqlBusca);
  return $resultado;
}
$post = post($conexao);
function post($conexao)
{
  $sqlBusca = "SELECT TB_ONG.NM_ONG, TB_ONG.CD_ONG, TB_ONG.PIC, TB_POST.TEXTO_POST, TB_POST.TITULO, TB_POST.IMAGEM_POST, TB_ONG.CD_ONG
    FROM TB_ONG
    JOIN TB_POST ON TB_ONG.CD_ONG = TB_POST.CD_ONG WHERE TB_ONG.CD_ONG = {$_GET['id']}";
  $resultado = mysqli_query($conexao, $sqlBusca);
  return $resultado;
}
$row = mysqli_fetch_assoc($conexao->query($sqlONG));

$_SESSION['nm_ong'] = $row['NM_ONG'];
$_SESSION['email_ong'] = $row['EMAIL'];
$_SESSION['sobre'] = $row['SOBRE'];
$_SESSION['insta'] = $row['INSTA'];
$_SESSION['wpp'] = $row['WPP'];
$_SESSION['x'] = $row['TWITTER'];
$_SESSION['pic'] = $row['PIC'];
$_SESSION['cd_ong'] = $row['CD_ONG'];

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

  <div class="anim modal-add-comment">
    <form action="./php/comentarios.php?id=<?= $_SESSION['cd_ong'] ?>" method="post">
      <i onclick="closeComment(event)" class="fa-solid fa-close"></i>
      <label>Adicionar comentário</label>
      <textarea placeholder="Adicione um comentário aqui" name="comentario" cols="30" rows="10"></textarea>
      <button>Comentar</button>
    </form>
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
        echo '<button class="feed-btn minha-ong-btn" onclick="location.href=`./MinhaOng.php`">';
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
      echo '<button id="btn-sair" onclick="Sair()">';
      echo 'Sair';
      echo '</button>';
    }

    ?>
  </nav>
  <section class="section-center">
    <div class="perfil">

      <div class="foto-e-info">

        <?php
        if (!isset($_SESSION['pic'])) {
          echo '<img src="./imagens/pfp.jpg" class="img-perfil-ong">';
        } else {
          echo '<img src="data:image/jpeg;base64,' . base64_encode($_SESSION['pic']) . '" class="img-perfil-ong">';
        }
        ?>

        <!-- <div class="img-perfil-ong"></div> -->
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
              <img src="./imagens/icon-verificado.png" alt="" width="40px">

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
            </div>
            <button onclick="Seguindo(<?= $_GET['id'] ?>)" class="btn-seguir seguir-<?= $_GET['id'] ?>">
              Seguir
            </button>
          </div>
        </div>
      </div>


      <div id="contatos">
        <h4>Contatos:</h4>
        <div class="socials">
          <a href="https://api.whatsapp.com/send/?phone=<?php echo $_SESSION['wpp'] ?>&text&type=phone_number&app_absent=0" target="_blank">
            <div class="whatsapp">
              <i class="fa-brands fa-whatsapp"></i>
              <span> <?php echo $_SESSION['wpp'] ?></span>
            </div>
          </a>
          <a href="https://instagram.com/<?php echo $_SESSION['insta'] ?>" target="_blank">
            <div class="insta">
              <i class="fa-brands fa-instagram"></i>
              <span> <?php echo "@" . $_SESSION['insta'] ?> </span>
            </div>
          </a>
          <a href="https://twitter.com/<?php echo $_SESSION['x'] ?>" target="_blank">
            <div class="twitter">
              <i class="fa-brands fa-x-twitter"></i>
              <span> <?php echo "@" . $_SESSION['x'] ?> </span>
            </div>
          </a>
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
        <?php
        while ($dados = $post->fetch_assoc()) {
        ?>
          <div class="posts" onclick='location.href="feed.php"'>
            <img src="data:image/jpeg;base64,<?= base64_encode($dados['IMAGEM_POST']) ?>" width="100px">

            <div class="conteudo">
              <h2><?= $dados['TITULO'] ?></h2>
            </div>
          </div>
        <?php
        }
        ?>
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
        $count = 0;
        while ($dados = $comentarios->fetch_assoc()) {
          echo '<form action="" method="post" class="comentarios">';
          echo '<div class="top-comets-content">';
          echo '<img src="data:image/jpeg;base64,' . base64_encode($dados['FOTO']) . '" class="icon-pfp" width="250px">';
          echo "<h1>{$dados['NM_DOADOR']}</h1>";
          echo '</div>';
          echo '<div class="comentario-text">';
          echo '<p>';
          echo "{$dados['TEXTO_COMMENT']}";
          echo '</p>';
          echo '</div>';
          echo '<div class="reactions-button-group">';
          echo "<button type='button' class='like-Button likeBtn-$count' onclick='likeBtn($count)'>";
          echo "<i class='fa-solid fa-heart like-$count'></i>";
          echo "<span class='count-like count-like-$count'>0</span>";
          echo '</button>';
          echo '</div>';
          echo '</form>';
          $count++;
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
      <a href="https://x.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
    </div>
  </footer>
  <script src="./js/modals.js"></script>
  <script src="./js/script.js"></script>
  <script>
    function Seguindo(id) {
      localStorage.setItem(`isFollowing-${id}`, id);
      idFollow = id;
      const btnSeguir = document.querySelector(`.seguir-${id}`);
      btnSeguir.classList.add("seguindo");
      btnSeguir.setAttribute("onclick", `Notfollow(${id})`);
      setTimeout(() => {
        btnSeguir.textContent = "Seguindo";
      }, 30);
    }

    function Notfollow(id) {
      localStorage.removeItem(`isFollowing-${id}`);
      const btnSeguir = document.querySelector(".btn-seguir");
      btnSeguir.classList.remove("seguindo");
      btnSeguir.setAttribute("onclick", `Seguindo(${id})`);
      setTimeout(() => {
        btnSeguir.textContent = "Seguir";
      }, 30);
    }

    function checkFollow(id) {
      let followID = localStorage.getItem(`isFollowing-${id}`);
      if (followID) {
        Seguindo(followID);
      }
    }
    checkFollow(<?= $_GET['id'] ?>)
  </script>
</body>

</html>