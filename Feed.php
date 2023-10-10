<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/verOngs.css">
    <link rel="stylesheet" href="./css/feed.css">

    <link rel="stylesheet" href="./css/wave.css">

    <script src="./js/script.js" defer></script>
    <title>Seu Feed</title>
</head>

<body>
    <nav id="nav-ongs">
        <img src="imagens/logo.png" onclick="location.href='index.html'" alt="logtipo" width="7%" id="logo" />
        <div class="input-nav">
            <button onclick="location.href='verOngs.php'" class="btn-visualizar-ongs feed-location">
                Vizualizar ONG'S
            </button>

            <button class="btn-perfil feed-btn" onclick="location.href='feed.php'">
                Feed
            </button>

        </div>
        <div class="foto-doador" onclick="location.href='PerfilDoador.php'">
            <div class=" img-perfil-doador" onclick="location.href='PerfilDoador.php'"></div>
        </div>
    </nav>
    <div class="square-post">
        <div class="div-nome">
            <img src="./imagens/pfp.jpg" alt="">
            <h1>
                IKMD - I Know my Directs
            </h1>
        </div>
        <div class="post-content">

            <div class="post-img"><img src="./imagens/foto-victor.jpg" alt=""></div>
            <div class="post-descricao">
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de 
                tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, 
                como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na 
                década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou 
                a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
            </div>
            <div class="post-coments">
              
            </div>
        </div>
    </div>
</body>

</html>