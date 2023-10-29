<!DOCTYPE html>
<?php
include "./php/banco.php";

session_start();

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

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/verOngs.css">
    <link rel="stylesheet" href="./css/feed.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/3552f262a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/wave.css">
    <script src="./js/RedefinirSenha.js"></script>

    <script src="./js/script.js" defer></script>
    <title>Feed</title>
</head>

<body>
    <div class="container-modal">

        <!-- <div class="side-bar">
            <button id="btn-fechar" onclick="modalClose()">
                X
            </button>
            <div class="top-sidebar">
                <div class=" img-perfil-doador"></div>
            </div>
            <button class="btn edit" onclick="location.href='perfildoador.php'">Editar perfil</button>
            <button class="btn ver" onclick="location.href='perfildoador.php'">Ver perfil</button> -->
        <!-- <button class="btn excluir">Excluir perfil</button> -->
        <!-- <button class="btn sair" onclick="location.href='index.html'">Sair</button>
        </div> -->

        <div class="modal-comentarios">
            <form action="./php/comentarios_feed.php" method="post">
                <div class="contents">
                    <h1>Faça Um Comentário</h1>
                    <textarea name="comentario" id="" maxlength="512"></textarea>
                    <div class="modal-btns">
                        <button type="submit" id="btn-modal-avancar">Enviar</button>
                        <button type="button" id="btn-modal-cancel" onclick="modalClose()">Cancelar</button>
                    </div>
                </div>
            </form>
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
    <div class="square-post">
        <div class="div-nome">
            <img src="./imagens/pfp.jpg" alt="" onclick="location.href='./PerfilOngs.php'">
            <h1>
                IKMD - I Know my Directs
            </h1>
        </div>
        <div class="post-content">

            <div class="post-img"><img src="./imagens/palhaço.png" alt=""></div>
            <div class="div-coments-description">
                <div class="div-toggle-parts">

                    <!-- <button class='btn-toggle btn-id-comments' onclick='Toggleparts(2)'>
                            
                        </button> -->
                </div>
                <div class="post-descricao">
                    <p>

                        Hoje foi um dia muito especial para as crianças do nosso projeto social. Recebemos a visita do palhaço Pitanguinha, que trouxe muita alegria, diversão e esperança para todos. Pitanguinha é um artista voluntário que faz parte da ONG [Palhaços Sem Fronteiras], uma organização que leva sorrisos e solidariedade para lugares onde há conflitos, violência e pobreza.

                        Pitanguinha chegou com seu nariz vermelho, sua roupa colorida e sua mala cheia de surpresas. Ele fez brincadeiras, contou piadas, cantou músicas e encantou as crianças com sua magia e seu carisma. Ele também distribuiu balões, doces e abraços para todos. Foi lindo ver o brilho nos olhos e o sorriso no rosto de cada criança que participou da atividade.

                        Agradecemos ao palhaço Pitanguinha por sua generosidade e seu talento. Ele nos mostrou que o humor é uma forma de resistir e de transformar a realidade. Esperamos que ele volte mais vezes para alegrar nossos dias. E você, quer conhecer mais sobre o trabalho da ONG Palhaços Sem Fronteiras? Acesse o site e saiba como apoiar essa causa. Juntos, podemos fazer a diferença na vida de muitas pessoas!
                    </p>
                </div>
                <div class="leia-mais">
                    <p>Ler mais...</p>
                </div>
                <div class="post-coments">

                    <?php
                    while ($dados = $comentarios->fetch_assoc()) {

                        echo '<div class="feed-comentarios">';
                        echo '<div class="feed-top-comets-content">';
                        echo '';
                        echo '<div class="foto-user-comentario"></div>';
                        echo '<h1>';
                        echo "{$dados['NM_DOADOR']}";
                        echo '</h1>';
                        echo '</div>';
                        echo '';
                        echo '<div class="comentario-text">';
                        echo '<p>';
                        echo "{$dados['TEXTO_COMMENT']}";
                        echo '</p>';
                        echo '';
                        echo '</div>';
                        echo '<div class="reactions-button-group">';
                        echo '<button id="like-Button">';
                        echo '</button>';
                        echo '';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <button class='btn-toggle  btn-id-descricao' onclick='Vercomments()'>

                    Ver Comentários
                </button>
            </div>
        </div>
        <div class="div-add-postcoments">
            <div id="btn-postcoments">
                <button id="btn-comment" onclick="modalShow()">
                    <i class="fa-regular fa-comment"></i>

                </button>
                <button id="btn-comment">
                    <i class="fa-regular  fa-heart fa-heart2" style="color:#fff" onclick="love()"></i>
                </button>
            </div>
        </div>
    </div>
    </div>
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
</body>

</html>