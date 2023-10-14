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
      $sqlBusca = "SELECT * FROM TB_DOADOR WHERE CD_DOADOR = {$_SESSION['id']}";
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
  <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon">
  <script src="./js/teste.js" defer></script>
  <title>Perfil Doador</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3552f262a9.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav id="nav-ongs">
    <img src="imagens/logo.png" alt="logtipo" width="7%" id="logo" onclick="location.href='index.html'" />
    <div class="input-nav">
      <button onclick="location.href='verOngs.php'" class="btn-visualizar-ongs">
        Vizualizar ONG'S
      </button>
      <button class="btn-perfil" onclick="location.href='feed.php'">
        Feed
      </button>
      <button id="btn-sair" onclick="location.href='./php/logout.php'">
        Sair
      </button>
    </div>
    <div class="pesquisar-2">
      <input type="search" name="pesquisar" placeholder="Pesquise o nome de uma ONG" id="search" />
      <svg width="24" height="24" id="lupa" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.875 19.4602L16.875 15.4554C16.7454 15.3226 16.6012 15.2051 16.445 15.105L15.445 14.4142C17.5019 11.866 17.521 8.23099 15.491 5.66125C13.461 3.09151 9.92359 2.27284 6.9731 3.68991C4.0226 5.10699 2.44643 8.38161 3.17773 11.5751C3.90902 14.7686 6.75261 17.0287 10.025 17.0173C11.613 17.0178 13.1541 16.4776 14.395 15.4855L15.145 16.4867C15.234 16.6156 15.3344 16.7362 15.445 16.8471L19.445 20.8519C19.5389 20.9467 19.6667 21 19.8 21C19.9333 21 20.0611 20.9467 20.155 20.8519L20.855 20.1511C21.0448 19.9631 21.0536 19.6589 20.875 19.4602ZM10.025 15.0149C7.26357 15.0149 5.025 12.7736 5.025 10.0089C5.025 7.24411 7.26357 5.00284 10.025 5.00284C12.7864 5.00284 15.025 7.24411 15.025 10.0089C15.025 11.3365 14.4982 12.6099 13.5605 13.5487C12.6228 14.4875 11.3511 15.0149 10.025 15.0149Z" fill="white" />
      </svg>
    </div>
  </nav>
  <section class="section-center">


    <div class="perfil">
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

      </div>



    </div>
  </section>

  <section class="section-doados">
    <div class="titulo">
      <h1>ONG's que você ajudou</h1>
    </div>
    <div class="section-center">
      <div class="banners-2 ongs-ajudadas">

      </div>
    </div>
  </section>
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
              <i class="fa-solid  fa-heart" onclick="love()"></i>
            </button>

          </div>
        </div>

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
              <i class="fa-solid  fa-heart" onclick="love()"></i>
            </button>

          </div>
        </div>
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
              <i class="fa-solid  fa-heart" onclick="love()"></i>
            </button>
          </div>
        </div>
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
              <i class="fa-solid  fa-heart" onclick="love()"></i>
            </button>

          </div>
        </div>
      </div>
    </div>
  </section>

</body>
<footer></footer>

</html>