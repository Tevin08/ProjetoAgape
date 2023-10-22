<!DOCTYPE html>
<?php

include "./php/banco.php";

session_start();

$ongs = ongs($conexao);
function ongs($conexao)
{
  $sqlBusca = "SELECT * FROM TB_ONG WHERE CD_ONG = {$_GET['id']}";
  $resultado = mysqli_query($conexao, $sqlBusca);
  return $resultado;
}
$comentarios = comentarios($conexao);
function comentarios($conexao)
{
  $sqlBusca = "SELECT * FROM TB_COMENT";
  $resultado = mysqli_query($conexao, $sqlBusca);
  return $resultado;
}

while ($dados = $ongs->fetch_assoc()) {
  $_SESSION['nm_ong'] = $dados['NM_ONG'];
  $_SESSION['cnpj'] = $dados['CNPJ'];
  $_SESSION['email_ong'] = $dados['EMAIL'];
  $_SESSION['sobre'] = $dados['SOBRE'];
  $_SESSION['insta'] = $dados['INSTA'];
  $_SESSION['wpp'] = $dados['WPP'];
  $_SESSION['x'] = $dados['TWITTER'];
  $_SESSION['pic'] = $dados['PIC'];
}

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
  <div class="modal-add-comment">
    <form action="./php/comentarios.php" method="post">
      <i onclick="closeComment(event)" class="fa-solid fa-close"></i>
      <label>Adicionar comentário</label>
      <textarea placeholder="Adicione um comentário aqui" name="comentario" cols="30" rows="10"></textarea>
      <button >Comentar</button>
    </form>
  </div>
  <nav id="nav-ongs">
    <img src="imagens/logo.png" alt="logtipo" width="7%" id="logo" onclick="location.href='index.html'" />
    <div class="input-nav">
      <button onclick="location.href='verOngs.php'" class="btn-visualizar-ongs">
        Visualizar ONG'S
      </button>
      <button class="btn-perfil" onclick="location.href='feed.php'">
        Feed
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
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 50 50">
                <path d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z"></path>
              </svg>
            </a>
            <span> <?php echo $_SESSION['wpp'] ?></span>
          </div>
          <div class="insta">
            <a href="https://instagram.com/<?php echo $_SESSION['insta'] ?>" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 50 50">
                <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z"></path>
              </svg>
            </a>
            <span> <?php echo "@" . $_SESSION['insta'] ?> </span>
          </div>
          <div class="twitter">
            <a href="https://twitter.com/<?php echo $_SESSION['x'] ?>" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 26 26">
                <path d="M 25.855469 5.574219 C 24.914063 5.992188 23.902344 6.273438 22.839844 6.402344 C 23.921875 5.75 24.757813 4.722656 25.148438 3.496094 C 24.132813 4.097656 23.007813 4.535156 21.8125 4.769531 C 20.855469 3.75 19.492188 3.113281 17.980469 3.113281 C 15.082031 3.113281 12.730469 5.464844 12.730469 8.363281 C 12.730469 8.773438 12.777344 9.175781 12.867188 9.558594 C 8.503906 9.339844 4.636719 7.246094 2.046875 4.070313 C 1.59375 4.847656 1.335938 5.75 1.335938 6.714844 C 1.335938 8.535156 2.261719 10.140625 3.671875 11.082031 C 2.808594 11.054688 2 10.820313 1.292969 10.425781 C 1.292969 10.449219 1.292969 10.46875 1.292969 10.492188 C 1.292969 13.035156 3.101563 15.15625 5.503906 15.640625 C 5.0625 15.761719 4.601563 15.824219 4.121094 15.824219 C 3.78125 15.824219 3.453125 15.792969 3.132813 15.730469 C 3.800781 17.8125 5.738281 19.335938 8.035156 19.375 C 6.242188 20.785156 3.976563 21.621094 1.515625 21.621094 C 1.089844 21.621094 0.675781 21.597656 0.265625 21.550781 C 2.585938 23.039063 5.347656 23.90625 8.3125 23.90625 C 17.96875 23.90625 23.25 15.90625 23.25 8.972656 C 23.25 8.742188 23.246094 8.515625 23.234375 8.289063 C 24.261719 7.554688 25.152344 6.628906 25.855469 5.574219"></path>
              </svg>
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
          echo '<h1>Banguelas anonimos</h1>';
          echo '</div>';
          echo '<div class="comentario-text">';
          echo '<p>';
          echo "{$dados['texto_coment']}";
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