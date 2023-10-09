<!DOCTYPE html>
<?php

session_start();

if (!isset($_SESSION['cnpj'])) {
  header('./PerfilDoador.php');
}

?>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/verOngs.css" />
  <link rel="stylesheet" href="./css/perfil.css" />
  <script src="./js/teste.js" defer></script>
  <title>Perfil Ong's</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon" />
  <a target="_blank" href="https://icons8.com/icon/jQKUXMBe9IdN/verified-badge"></a> <a target="_blank" href="https://icons8.com"></a>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
</head>

<body>
  <nav id="nav-ongs">
    <img src="imagens/logo.png" alt="logtipo" width="7%" id="logo" onclick="location.href='index.html'" />
    <div class="input-nav">
      <button onclick="location.href='verOngs.php'" class="btn-visualizar-ongs">
        Vizualizar ONG'S
      </button>
      <button class="btn-perfil" onclick="location.href='PerfilDoador.php'">
        Seu Perfil
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
        <div class="img-perfil-ong"></div>
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
          <span>
            <?php
            if (!isset($_SESSION['email_ong'])) {
              echo "medicossemfronteiras@gmail.com";
            } else {
              echo $_SESSION['email_ong'];
            }
            ?>
          </span>
        </div>
      </div>
      <div class="icon-verificado">
        <img src="./imagens/icon-verificado.png" alt="">
      </div>
      <div id="contatos">
        <h4>contatos:</h4>
        <div class="zap">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 50 50">
            <path d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z"></path>
          </svg>

          <span> 5555-9087 </span>
        </div>

        <div class="insta">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 50 50">
            <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z"></path>
          </svg>
          <span> @msf_brasil </span>
        </div>
        <div class="twiter">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 26 26">
            <path d="M 25.855469 5.574219 C 24.914063 5.992188 23.902344 6.273438 22.839844 6.402344 C 23.921875 5.75 24.757813 4.722656 25.148438 3.496094 C 24.132813 4.097656 23.007813 4.535156 21.8125 4.769531 C 20.855469 3.75 19.492188 3.113281 17.980469 3.113281 C 15.082031 3.113281 12.730469 5.464844 12.730469 8.363281 C 12.730469 8.773438 12.777344 9.175781 12.867188 9.558594 C 8.503906 9.339844 4.636719 7.246094 2.046875 4.070313 C 1.59375 4.847656 1.335938 5.75 1.335938 6.714844 C 1.335938 8.535156 2.261719 10.140625 3.671875 11.082031 C 2.808594 11.054688 2 10.820313 1.292969 10.425781 C 1.292969 10.449219 1.292969 10.46875 1.292969 10.492188 C 1.292969 13.035156 3.101563 15.15625 5.503906 15.640625 C 5.0625 15.761719 4.601563 15.824219 4.121094 15.824219 C 3.78125 15.824219 3.453125 15.792969 3.132813 15.730469 C 3.800781 17.8125 5.738281 19.335938 8.035156 19.375 C 6.242188 20.785156 3.976563 21.621094 1.515625 21.621094 C 1.089844 21.621094 0.675781 21.597656 0.265625 21.550781 C 2.585938 23.039063 5.347656 23.90625 8.3125 23.90625 C 17.96875 23.90625 23.25 15.90625 23.25 8.972656 C 23.25 8.742188 23.246094 8.515625 23.234375 8.289063 C 24.261719 7.554688 25.152344 6.628906 25.855469 5.574219"></path>
          </svg>
          <span> @msf_brasil </span>
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
          Médicos Sem Fronteiras (MSF),é uma organização humanitária que leva
          cuidados de saúde a pessoas que sofrem com crises humanitárias pelo
          mundo. Ele explica como os MSF surgiram na França em 1971, quais são
          os seus princípios e valores, quais foram alguns dos seus projetos
          no Brasil e em outros países, e como as pessoas podem doar para
          apoiar o seu trabalho. Ele tem o objetivo de convencer as pessoas a
          contribuir com os MSF, mostrando a importância e o impacto da sua
          atuação.
        </p>
      </div>

    </section>
  </div>
  <section class="section-doados">
    <div class="titulo font">
      <h1>Postagens</h1>
    </div>
    <div class="section-center">
      <p></p>
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
      <div class="container-Comentarios ongs-ajudadas">
        <div class="comentarios">
          <div class="top-comets-content">

            <div class="foto-user-comentario"></div>
            <h1>Victor raphael</h1>
          </div>

          <div class="comentario-text">
            <p>
              máximo de caracteres 285, amet consectetur adipisicing elit.
              Temporibus voluptatibus, veniam quaerat hic sed maiores et,
              sapiente tenetur voluptatem mollitia eum molestiae voluptate totam
              exercitationem dolorem in eaque molestias inventore?]
            </p>
          </div>
          <div class="reactions-button-group">
            <button id="like-Button">
              <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z" fill="#34802b" />
              </svg>
            </button>
            <button id="dislike-button">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z" fill="#a32638" />
              </svg>
            </button>
          </div>
        </div>
        <div class="comentarios">
          <div class="top-comets-content">

            <div class="foto-user-comentario"></div>
            <h1>Victor raphael</h1>
          </div>

          <div class="comentario-text">
            <p>
              máximo de caracteres 285, A vitória me deve um açai Temporibus voluptatibus, veniam quaerat hic sed maiores et,
              sapiente tenetur voluptatem mollitia eum molestiae voluptate totam
              exercitationem dolorem in eaque molestias inventore?]
            </p>
          </div>
          <div class="reactions-button-group">
            <button id="like-Button">
              <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z" fill="#34802b" />
              </svg>
            </button>
            <button id="dislike-button">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z" fill="#a32638" />
              </svg>
            </button>
          </div>
        </div>
        <div class="comentarios">
          <div class="top-comets-content">

            <div class="foto-user-comentario"></div>
            <h1>Victor raphael</h1>
          </div>

          <div class="comentario-text">
            <p>
              máximo de caracteres 285, amet consectetur adipisicing elit.
              Temporibus voluptatibus, veniam quaerat hic sed maiores et,
              sapiente tenetur voluptatem mollitia eum molestiae voluptate totam
              exercitationem dolorem in eaque molestias inventore?]
            </p>
          </div>
          <div class="reactions-button-group">
            <button id="like-Button">
              <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z" fill="#34802b" />
              </svg>
            </button>
            <button id="dislike-button">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z" fill="#a32638" />
              </svg>
            </button>
          </div>
        </div>
        <div class="comentarios">
          <div class="top-comets-content">

            <div class="foto-user-comentario"></div>
            <h1>Victor raphael</h1>
          </div>

          <div class="comentario-text">
            <p>
              máximo de caracteres 285, amet consectetur adipisicing elit.
              Temporibus voluptatibus, veniam quaerat hic sed maiores et,
              sapiente tenetur voluptatem mollitia eum molestiae voluptate totam
              exercitationem dolorem in eaque molestias inventore?]
            </p>
          </div>
          <div class="reactions-button-group">
            <button id="like-Button">
              <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z" fill="#34802b" />
              </svg>
            </button>
            <button id="dislike-button">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z" fill="#a32638" />
              </svg>
            </button>
          </div>
        </div>
        <div class="comentarios">
          <div class="top-comets-content">

            <div class="foto-user-comentario"></div>
            <h1>Victor raphael</h1>
          </div>

          <div class="comentario-text">
            <p>
              máximo de caracteres 285, amet consectetur adipisicing elit.
              Temporibus voluptatibus, veniam quaerat hic sed maiores et,
              sapiente tenetur voluptatem mollitia eum molestiae voluptate totam
              exercitationem dolorem in eaque molestias inventore?]
            </p>
          </div>
          <div class="reactions-button-group">
            <button id="like-Button">
              <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z" fill="#34802b" />
              </svg>
            </button>
            <button id="dislike-button">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z" fill="#a32638" />
              </svg>
            </button>
          </div>
        </div>
        <div class="comentarios">
          <div class="top-comets-content">

            <div class="foto-user-comentario"></div>
            <h1>Victor raphael</h1>
          </div>

          <div class="comentario-text">
            <p>
              máximo de caracteres 285, amet consectetur adipisicing elit.
              Temporibus voluptatibus, veniam quaerat hic sed maiores et,
              sapiente tenetur voluptatem mollitia eum molestiae voluptate totam
              exercitationem dolorem in eaque molestias inventore?]
            </p>
          </div>
          <div class="reactions-button-group">
            <button id="like-Button">
              <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z" fill="#34802b" />
              </svg>
            </button>
            <button id="dislike-button">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z" fill="#a32638" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<footer></footer>

</html>