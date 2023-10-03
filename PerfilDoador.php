<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./css/verOngs.css" />
    <link rel="stylesheet" href="./css/perfil.css" />
    <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon">
    <script src="./js/teste.js"defer></script>
    <title>Perfil Doador</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav id="nav-ongs">
      <img src="imagens/logo.png" alt="logtipo" width="7%" id="logo" />
      <div class="input-nav">
        <button
          onclick="location.href='verOngs.html'"
          class="btn-visualizar-ongs"
        >
          Vizualizar ONG'S
        </button>
        <button class="btn-perfil" onclick="location.href='PerfilDoador.html'">
          Seu Perfil
        </button>
      </div>
      <div class="pesquisar-2">
        <input
          type="search"
          name="pesquisar"
          placeholder="Pesquise o nome de uma ONG"
          id="search"
        />
        <svg
          width="24"
          height="24"
          id="lupa"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M20.875 19.4602L16.875 15.4554C16.7454 15.3226 16.6012 15.2051 16.445 15.105L15.445 14.4142C17.5019 11.866 17.521 8.23099 15.491 5.66125C13.461 3.09151 9.92359 2.27284 6.9731 3.68991C4.0226 5.10699 2.44643 8.38161 3.17773 11.5751C3.90902 14.7686 6.75261 17.0287 10.025 17.0173C11.613 17.0178 13.1541 16.4776 14.395 15.4855L15.145 16.4867C15.234 16.6156 15.3344 16.7362 15.445 16.8471L19.445 20.8519C19.5389 20.9467 19.6667 21 19.8 21C19.9333 21 20.0611 20.9467 20.155 20.8519L20.855 20.1511C21.0448 19.9631 21.0536 19.6589 20.875 19.4602ZM10.025 15.0149C7.26357 15.0149 5.025 12.7736 5.025 10.0089C5.025 7.24411 7.26357 5.00284 10.025 5.00284C12.7864 5.00284 15.025 7.24411 15.025 10.0089C15.025 11.3365 14.4982 12.6099 13.5605 13.5487C12.6228 14.4875 11.3511 15.0149 10.025 15.0149Z"
            fill="white"
          />
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
            <p>Victor Raphael (tom)</p>
          </div>

          <div id="contato">
            <span>VICtinhopRafinha@email.com</span>
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
                <svg
                  width="28"
                  height="24"
                  viewBox="0 0 28 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z"
                    fill="#878787"
                  />
                </svg>
              </button>
              <button id="dislike-button">
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 28 28"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z"
                    fill="#878787"
                  />
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
                <svg
                  width="28"
                  height="24"
                  viewBox="0 0 28 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z"
                    fill="#878787"
                  />
                </svg>
              </button>
              <button id="dislike-button">
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 28 28"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z"
                    fill="#878787"
                  />
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
                <svg
                  width="28"
                  height="24"
                  viewBox="0 0 28 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z"
                    fill="#878787"
                  />
                </svg>
              </button>
              <button id="dislike-button">
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 28 28"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z"
                    fill="#878787"
                  />
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
                <svg
                  width="28"
                  height="24"
                  viewBox="0 0 28 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z"
                    fill="#878787"
                  />
                </svg>
              </button>
              <button id="dislike-button">
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 28 28"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z"
                    fill="#878787"
                  />
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
                <svg
                  width="28"
                  height="24"
                  viewBox="0 0 28 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z"
                    fill="#878787"
                  />
                </svg>
              </button>
              <button id="dislike-button">
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 28 28"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z"
                    fill="#878787"
                  />
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
                <svg
                  width="28"
                  height="24"
                  viewBox="0 0 28 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M26.1511 10.2508C25.3164 9.21831 24.0765 8.62594 22.7491 8.62594H17.7634L18.228 3.69006C18.3313 2.66894 17.8727 1.67581 17.0607 1.16044C16.4456 0.770187 15.7211 0.652937 15.0229 0.831437C14.3351 1.00644 13.7427 1.46319 13.3884 2.10194L10.2498 8.09394C10.0266 8.52006 9.69325 8.86394 9.28638 9.11156C8.8375 8.30481 7.987 7.75181 7.00088 7.75181H3.5C2.05275 7.75181 0.875 8.92956 0.875 10.3768V20.8768C0.875 22.3241 2.05275 23.5018 3.5 23.5018H7C8.06838 23.5018 8.98625 22.8578 9.39488 21.9399L11.2009 22.3914C11.8247 22.5472 12.4679 22.6268 13.111 22.6268H21.623C23.6723 22.6268 25.4713 21.1726 25.9009 19.1679L27.0261 13.9179C27.3044 12.6203 26.985 11.2833 26.1502 10.2517L26.1511 10.2508ZM7.875 20.8759C7.875 21.3581 7.48212 21.7509 7 21.7509H3.5C3.01787 21.7509 2.625 21.3581 2.625 20.8759V10.3759C2.625 9.89381 3.01787 9.50094 3.5 9.50094H7C7.48212 9.50094 7.875 9.89381 7.875 10.3759V20.8759ZM25.3155 13.5504L24.1903 18.8004C23.933 20.0027 22.8532 20.8759 21.6239 20.8759H13.1119C12.6114 20.8759 12.1109 20.8147 11.6261 20.6931L9.625 20.1926V10.9167L9.8805 10.7889C10.7065 10.3759 11.3706 9.72494 11.7994 8.90594L14.9284 2.93319C15.0421 2.72931 15.2294 2.58494 15.456 2.52719C15.6826 2.46856 15.9197 2.50881 16.1245 2.63831C16.3791 2.79931 16.5244 3.15106 16.4876 3.51944L15.932 9.41869C15.9093 9.66369 15.9898 9.90781 16.156 10.0898C16.3223 10.2718 16.5568 10.3759 16.8035 10.3759H22.75C23.5462 10.3759 24.2909 10.7312 24.7914 11.3507C25.2919 11.9702 25.4835 12.7717 25.3164 13.5504H25.3155Z"
                    fill="#878787"
                  />
                </svg>
              </button>
              <button id="dislike-button">
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 28 28"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.84888 16.7492C2.68363 17.7817 3.9235 18.3741 5.25087 18.3741H10.2366L9.772 23.3099C9.66875 24.3311 10.1273 25.3242 10.9393 25.8396C11.5544 26.2298 12.2789 26.3471 12.9771 26.1686C13.6649 25.9936 14.2573 25.5368 14.6116 24.8981L17.7502 18.9061C17.9734 18.4799 18.3068 18.1361 18.7136 17.8884C19.1625 18.6952 20.013 19.2482 20.9991 19.2482H24.5C25.9473 19.2482 27.125 18.0704 27.125 16.6232L27.125 6.12319C27.125 4.67594 25.9473 3.49819 24.5 3.49819H21C19.9316 3.49819 19.0138 4.14219 18.6051 5.06006L16.7991 4.60856C16.1753 4.45281 15.5321 4.37319 14.889 4.37319L6.377 4.37319C4.32775 4.37319 2.52875 5.82744 2.09912 7.83206L0.973875 13.0821C0.695625 14.3797 1.015 15.7167 1.84975 16.7483L1.84888 16.7492ZM20.125 6.12406C20.125 5.64194 20.5179 5.24906 21 5.24906H24.5C24.9821 5.24906 25.375 5.64194 25.375 6.12406L25.375 16.6241C25.375 17.1062 24.9821 17.4991 24.5 17.4991H21C20.5179 17.4991 20.125 17.1062 20.125 16.6241V6.12406ZM2.6845 13.4496L3.80975 8.19956C4.067 6.99731 5.14675 6.12406 6.37613 6.12406L14.8881 6.12406C15.3886 6.12406 15.8891 6.18531 16.3739 6.30694L18.375 6.80744V16.0833L18.1195 16.2111C17.2935 16.6241 16.6294 17.2751 16.2006 18.0941L13.0716 24.0668C12.9579 24.2707 12.7706 24.4151 12.544 24.4728C12.3174 24.5314 12.0803 24.4912 11.8755 24.3617C11.6209 24.2007 11.4756 23.8489 11.5124 23.4806L12.068 17.5813C12.0907 17.3363 12.0102 17.0922 11.844 16.9102C11.6777 16.7282 11.4432 16.6241 11.1965 16.6241H5.25C4.45375 16.6241 3.70913 16.2688 3.20863 15.6493C2.70812 15.0298 2.5165 14.2283 2.68362 13.4496H2.6845Z"
                    fill="#878787"
                  />
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
