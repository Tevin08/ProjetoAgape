<!DOCTYPE html>
<?php
include "./php/banco.php";

session_start();

$users = usuarios($conexao);
function usuarios($conexao)
{
  $sqlBusca = 'SELECT * FROM tb_ong';
  $resultado = mysqli_query($conexao, $sqlBusca);
  return $resultado;
}

?>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/verOngs.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <script src="https://kit.fontawesome.com/3552f262a9.js" crossorigin="anonymous"></script>
  <script src="./js/script.js" defer></script>
  <script src="./js/teste.js" defer></script>
  <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon">
  <title>Explorar ONG’s</title>
</head>

<body>
  <nav id="nav-ongs">
    <img src="imagens/logo.png" onclick="location.href='index.html'" alt="logtipo" width="7%" id="logo" />
    <div class="input-nav">
      <button class=" btn-visualizar-ongs">
        Vizualizar ONG'S
      </button>
      <button class="btn-perfil feed-btn" onclick="Rota2()">
        Feed
      </button>
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
  <main class="main">
    <div class="section-pesquisa">
      <h1 id="title">Organizações:</h1>
      <div class="pesquisar">
        <input type="search" name="pesquisar" placeholder="Pesquise o nome de uma ONG" id="search" maxlength="" />
        <svg width="24" height="24" id="lupa" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20.875 19.4602L16.875 15.4554C16.7454 15.3226 16.6012 15.2051 16.445 15.105L15.445 14.4142C17.5019 11.866 17.521 8.23099 15.491 5.66125C13.461 3.09151 9.92359 2.27284 6.9731 3.68991C4.0226 5.10699 2.44643 8.38161 3.17773 11.5751C3.90902 14.7686 6.75261 17.0287 10.025 17.0173C11.613 17.0178 13.1541 16.4776 14.395 15.4855L15.145 16.4867C15.234 16.6156 15.3344 16.7362 15.445 16.8471L19.445 20.8519C19.5389 20.9467 19.6667 21 19.8 21C19.9333 21 20.0611 20.9467 20.155 20.8519L20.855 20.1511C21.0448 19.9631 21.0536 19.6589 20.875 19.4602ZM10.025 15.0149C7.26357 15.0149 5.025 12.7736 5.025 10.0089C5.025 7.24411 7.26357 5.00284 10.025 5.00284C12.7864 5.00284 15.025 7.24411 15.025 10.0089C15.025 11.3365 14.4982 12.6099 13.5605 13.5487C12.6228 14.4875 11.3511 15.0149 10.025 15.0149Z" fill="white" />
        </svg>
      </div>
    </div>
    <!-- <form action="./php/image_upload.php" method="post" enctype="multipart/form-data">
      <label for="image" id="img_upload">
        <div class="upload_img">
          <img src="./imagens/img_upload.png" alt="" width="100px">
        </div>
      </label>
      <input type="file" name="image" id="image">
    </form> -->
    <div class="banners">
      <?php
      if ($users->num_rows > 0) {
        while ($dados = $users->fetch_assoc()) {
          echo "<div class='banner-0' onclick='location.href=`PerfilOngs.php?id={$dados["CD_ONG"]}`'>";
          echo '<img src="data:image/jpeg;base64,' . base64_encode($dados["PIC"]) . '" id="ong-logo">';
          echo "<h1>{$dados['NM_ONG']}</h1>";
          echo '<div>';
          echo '<p>Categoria</p>';
          echo '</div>';
          echo "</div>";
        }
      } else {
        echo "<h1 style=color:black; >Nenhuma ONG cadastrada</h1>";
      }
      // while ($dados = $users->fetch_assoc()) {
      //   echo "<div class='banner-0' onclick='location.href=`PerfilOngs.php`'>";
      //   echo "<img src=`` alt=``>";
      //   echo "<div class='logos img-back-2'></div>";
      //   echo "<h1>{$dados['nm_ong']}</h1>";
      //   echo "</div>";
      // }
      ?>
    </div>
  </main>

  <script src="js/script.js" defer></script>
</body>
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

</html>