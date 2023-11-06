<!DOCTYPE html>
<?php

include "./php/banco.php";

session_start();

if (!isset($_SESSION['id_ong'])) {
    header('location: ./loginOngs.php');
    exit;
}
$comentarios = comentarios($conexao);
function comentarios($conexao)
{
    $sqlBusca = "SELECT TB_COMMENT.CD_COMMENT, TB_COMMENT.CD_DOADOR, TB_DOADOR.CD_DOADOR, TB_DOADOR.NM_DOADOR, TB_COMMENT.TEXTO_COMMENT, TB_DOADOR.FOTO
  FROM TB_COMMENT
  JOIN TB_DOADOR ON TB_COMMENT.CD_DOADOR = TB_DOADOR.CD_DOADOR WHERE TB_COMMENT.CD_ONG = {$_SESSION['id_ong']}
  ";
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}
$post = post($conexao);
function post($conexao)
{
    $sqlBusca = "SELECT TB_ONG.NM_ONG, TB_ONG.CD_ONG, TB_ONG.PIC, TB_POST.TEXTO_POST, TB_POST.TITULO, TB_POST.IMAGEM_POST
    FROM TB_ONG
    JOIN TB_POST ON TB_ONG.CD_ONG = TB_POST.CD_ONG WHERE TB_ONG.CD_ONG = {$_SESSION['id_ong']}";
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}
$users = usuarios($conexao);
function usuarios($conexao)
{
    $sqlBusca = "SELECT * FROM TB_ONG WHERE CD_ONG = '{$_SESSION['id_ong']}'";
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
    $_SESSION['minha_logo'] = $dados['PIC'];
}


?>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/verOngs.css" />
    <link rel="stylesheet" href="./css/perfil.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/wave.css">
    <script src="./js/RedefinirSenha.js"></script>
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

    <div class="container-post">
        <div class="modal-post">
            <div class="div-forms forms-login dados-form">
                <div class="seta-voltar">

                    <button class="btn-voltar" onclick="fecharModal()">
                        <img width="35px" src="./imagens/arrow.png" alt="ff" />
                    </button>
                </div>
                <div class="cadas">
                    <form action="./php/post.php" method="post" class="cad-edit" enctype="multipart/form-data">
                        <input type="text" name="tituloPost" id="tituloPost" placeholder="Título do Post..">
                        <div class="post-content-square">

                            <div class="post-foto-square">

                                <label for="images" id="img_upload">
                                    <img src="./imagens/img_upload.png" alt="" width="80px">
                                </label>
                                <input type="file" name="image" id="images" onchange="openFile(event)">
                                <img class="output" width="200px">
                                <div class="edit-inputs">

                                </div>
                            </div>
                            <div class="descricao-post-square">
                                <textarea name="texto" id="" placeholder="Descrição..." cols="20" rows="10"></textarea>
                            </div>
                        </div>
                        <button id="btn-doadorC" type="submit">Postar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="container-modal">
        <div class="modal-comentarios">
            <div class="div-forms forms-login dados-form">
                <div class="seta-voltar">

                    <button class="btn-voltar" onclick="modalCloseEdit()">
                        <img width="35px" src="./imagens/arrow.png" alt="ff" />
                    </button>
                </div>
                <div class="cadas">
                    <form action="./php/update_ong.php" method="post" class="cad-edit" enctype="multipart/form-data">
                        <h2 style="font-weight: 700">Edite seu Perfil</h2>
                        <label for="image" id="img_upload">
                            <img src="./imagens/img_upload.png" alt="" width="80px">
                            <h3>Editar imagem de perfil</h3>
                        </label>
                        <input type="file" name="image" id="image" onchange="openFileEdit(event)">
                        <img class="outputEdit" width="200px">
                        <div class="edit-inputs">
                            <div class="input-edit-perfil">
                                <label for="name">Editar Nome do Perfil</label>
                                <input type="text" placeholder="Nome do perfil" value="<?php echo $_SESSION['nm_ong'] ?>" name='name' id='input-edit-name'>
                            </div>
                            <div class="input-edit-perfil">
                                <label for="name">Editar Email</label>
                                <input type="text" placeholder="Email" value="<?php echo $_SESSION['email_ong'] ?>" name='email' id='input-edit-name'>
                            </div>

                        </div>
                        <button id="btn-doadorC" type="submit">Confirmar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <nav id="nav-ongs">
        <img src="imagens/logo.png" alt="logtipo" width="7%" id="logo" onclick="location.href='index.html'" />
        <div class="input-nav">
            <button onclick="location.href='verOngs.php'" class="btn-visualizar-ongs">
                Visualizar ONG'S
            </button>
            <button class="feed-btn" onclick="location.href='feed.php'">
                Feed
            </button>
            <button class="btn-perfil" onclick="location.href='MinhaOng.php'">
                Minha ONG
            </button>
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

                <div class="div-img-perfil-ong">

                    <?php
                    if (!isset($_SESSION['minha_logo'])) {
                        echo '<img src="./imagens/pfp.jpg" class="img-perfil-ong">';
                    } else {
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($_SESSION['minha_logo']) . '" class="img-perfil-ong" width="250px">';
                    }
                    ?>
                </div>

                <!-- <div class="img-perfil-ong"></div> -->
                <div class="info">
                    <div id="nome">
                        <p>
                            <?php
                            if (!isset($_SESSION['nm_ong'])) {
                                echo "ONG";
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

                    </div>
                    <button id='btn-edit-perfil' onclick="modalEdit()">
                        <i class="fa-regular fa-pen-to-square"></i>
                        Editar Perfil
                    </button>

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
            <div id="adicionar-coments">
                <button onclick="abrirModal()" id="btn-add-coments"><img src="./imagens/plus-icon.png" alt=""></button>
                <span>Adicionar Post</span>
            </div>



            <div class="container-posts">
                <?php
                while ($dados = $post->fetch_assoc()) {
                ?>
                    <div class="posts"  onclick='location.href="feed.php"'>
                        <img src="data:image/jpeg;base64,<?= base64_encode($dados['IMAGEM_POST']) ?>" width="200px">
                        <h2><?= $dados['TITULO'] ?></h2>
                    </div>
                <?php
                }
                ?>
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
                <?php
                $count = 0;
                while ($dados = $comentarios->fetch_assoc()) {
                    echo '<div class="comentarios">';
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
                    echo '</div>';
                    $count++;
                }
                ?>
            </div>
        </div>
    </section>
    <script src="./js/script.js"></script>
    <script src="./js/modals.js"></script>
</body>
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

</html>