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
    $sqlBusca = "SELECT TB_COMMENT.CD_COMMENT, TB_COMMENT.CD_DOADOR, TB_DOADOR.CD_DOADOR, TB_DOADOR.NM_DOADOR, TB_COMMENT.TEXTO_COMMENT
  FROM TB_COMMENT
  JOIN TB_DOADOR ON TB_COMMENT.CD_DOADOR = TB_DOADOR.CD_DOADOR;
  ";
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
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
                    <form action="./php/update_ong.php" method="post" class="cad-edit" enctype="multipart/form-data">
                        <h1 >Faça sua Postagem!</h1>
                        <div class="post-content-square">

                            <div class="post-foto-square">
    
                                <label for="image" id="img_upload">
                                    <img src="./imagens/img_upload.png" alt="" width="80px">
                                    
                                </label>
                                <input type="file" name="image" id="image" onchange="openFile(event)">
                                <img id="output" width="200px">
                                <div class="edit-inputs">
                                   
                                </div>
                            </div>
                            <div class="descricao-post-square">
                                <textarea name="" id="" cols="20" rows="10"></textarea>
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

                    <button class="btn-voltar" onclick="modalClose()">
                        <img width="35px" src="./imagens/arrow.png" alt="ff" />
                    </button>
                </div>
                <div class="cadas">
                    <form action="./php/update_ong.php" method="post" class="cad-edit" enctype="multipart/form-data">
                        <h2 style="font-weight: 700">Edite seu Perfil</h2>
                        <label for="image" id="img_upload">
                            <img src="./imagens/img_upload.png" alt="" width="80px">
                            <h3>Coloque uma imagem</h3>
                        </label>
                        <input type="file" name="image" id="image" onchange="openFile(event)">
                        <img id="output" width="200px">
                        <div class="edit-inputs">
                            <div class="input-edit-perfil">

                                <label for="name">Editar Nome do Perfil</label>
                                <input type="text" name='name' id='input-edit-name'>
                            </div>

                            <div class="input-edit-perfil">

                                <label for="name">Editar Email</label>
                                <input type="text" name='email' id='input-edit-name'>
                            </div>

                        </div>
                        <!-- <a onclick="modalShow()">Esqueceu sua senha?</a> -->
                        <button id="btn-doadorC" type="submit">Confirmar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="container-modal">
        <div class="modal-comentarios">
            <div class="div-forms forms-login dados-form">
                <button class="btn-voltar" onclick="modalClose()">
                    <img width="35px" src="./imagens/arrow.png" alt="ff" />
                </button>
                <h2 style="font-weight: 700">Edite seu Perfil</h2>
                <div class="cadas">
                    <form action="./php/dados_ong.php" method="post" class="frmcad-1" enctype="multipart/form-data">
                        <label for="image" id="img_upload">
                            <img src="./imagens/img_upload.png" alt="" width="80px" />
                            <h3>Coloque uma imagem</h3>
                        </label>
                        <input type="file" name="image" id="image" onchange="openFile(event)" />
                        <img id="output" width="200px" />
                        <div class="cad-1">
                            <label for="">WhatsApp da ONG</label>
                            <input type="text" placeholder="WhatsApp" name="wpp" id="emailO" />
                            <label for="">Instagram da ONG</label>
                            <input type="text" placeholder="Instagram" name="insta" id="emailO" />
                            <label for="">X da ONG</label>
                            <input type="text" placeholder="X" name="x" id="emailO" />
                        </div>
                        <!-- <a onclick="modalShow()">Esqueceu sua senha?</a> -->
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
                       
                    </div>
                    <button id='btn-edit-perfil' onclick="modalShow()">
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
                              

                <!-- <div class="posts">
                    <div class="foto-post"></div>

                    <div class="conteudo">
                        <h2>Dia do Áçai</h2>
                        <p>Hoje aqui, tivemos o dia do açái</p>
                    </div>
                </div> -->

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
                while ($dados = $comentarios->fetch_assoc()) {
                    echo '<div class="comentarios">';
                    echo '<div class="top-comets-content">';
                    echo '<div class="foto-user-comentario"></div>';
                    echo "<h1>{$dados['NM_DOADOR']}</h1>";
                    echo '</div>';
                    echo '<div class="comentario-text">';
                    echo '<p>';
                    echo "{$dados['TEXTO_COMMENT']}";
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