<?php

include "banco.php";

session_start();

$users = usuarios($conexao);
function usuarios($conexao)
{
    $sqlBusca = 'SELECT * FROM tb_ong';
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}

//Validar o campo do email
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email inválido";
    exit;
}

// Verificar se a senha tem menos de 8 caracteres
if (strlen($_POST['senha']) < 8) {
    echo "A senha deve conter pelo menos 8 caracteres";
    exit;
}

// Verificar se as senhas são as mesmas
if ($_POST['senha'] !== $_POST['senha2']) {
    echo "As senhas não se coincidem";
    exit;
}

//validar a existencia do usuario
while ($dados = $users->fetch_assoc()) {
    if ($_POST['CNPJ'] == $dados['cnpj']) {
        echo "CNPJ já registrado.";
        exit;
    }
    if ($_POST['email'] == $dados['email']) {
        echo "Email já está em uso";
        exit;
    }
}

function gravar($conexao)
{
    $passHash = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $sql = "insert into tb_ong
    (nm_ong, nm_representante, email, senha, cnpj) 
    values(
        '{$_POST['nome-ong']}',
        '{$_POST['nome-representante']}',
        '{$_POST['email']}',
        '{$passHash}',
        '{$_POST['CNPJ']}'
    )";
    return mysqli_query($conexao, $sql);
}

if (gravar($conexao)) {
    header('location: ../cadastroONgs.html');
} else {
    echo 'Erro na gravação';
}
