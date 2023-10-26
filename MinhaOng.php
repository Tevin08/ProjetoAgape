<!DOCTYPE html>
<?php

include "./php/banco.php";

session_start();

if (!isset($_SESSION['id_ong'])) {
    header('location: ./loginOngs.php');
    exit;
}

$users = usuarios($conexao);
function usuarios($conexao)
{
    $sqlBusca = "SELECT * FROM TB_ONG WHERE CNPJ = '{$_SESSION['cnpj']}'";
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}

while ($dados = $users->fetch_assoc()) {
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
                        echo "medicossemfronteiras@gmail.com";
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
                                echo "Erro";
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

                    </div>
                    <button id='btn-edit-perfil'>
          <i class="fa-regular fa-pen-to-square"></i>  
          Editar Perfil
        </button>
                </div>
            </div>

            <div id="contatos">
                <h4>contatos:</h4>
                <div class="zap">
                <i class="fa-brands fa-whatsapp fa-shake"></i>

                    <span> 
                        <?php
                            if (!isset($_SESSION['wpp'])) {
                                echo "Erro";
                            } else {
                                echo $_SESSION['wpp'];
                            }
                            ?> </span>
                </div>

                <div class="insta">
                <i class="fa-brands fa-instagram fa-beat"></i>
                    <span> <?php
                            if (!isset($_SESSION['insta'])) {
                                echo "Erro";
                            } else {
                                echo "@" . $_SESSION['insta'];
                            }
                            ?> </span>
                </div>
                <div class="twiter">
                <i class="fa-brands fa-x-twitter"></i>
                    <span>
                        <?php
                        if (!isset($_SESSION['x'])) {
                            echo "Erro";
                        } else {
                            echo "@" . $_SESSION['x'];
                        }
                        ?>
                    </span>
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
                    if (!isset($_SESSION['sobre'])) {
                        echo "olá";
                    } else {
                        echo $_SESSION['sobre'];
                    }
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

            <div class="container-Comentarios ongs-ajudadas">
                <div class="comentarios">
                    <div class="top-comets-content">

                        <div class="foto-user-comentario"></div>
                        <h1>Vitor Raphael</h1>
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
                        <h1>Vitor Raphael</h1>
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
                        <h1>Vitor Raphael</h1>
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
                        <h1>Vitor Raphael</h1>
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
                        <h1>Vitor Raphael</h1>
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