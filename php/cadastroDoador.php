<?php

include "banco.php";

session_start();

function validaCPF($cpf)
{

    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}

function validar_cnpj($cnpj)
{
    // Verificar se foi informado
    if (empty($cnpj))
        return false;
    // Remover caracteres especias
    $cnpj = preg_replace('/[^0-9]/', '', $cnpj);
    // Verifica se o numero de digitos informados
    if (strlen($cnpj) != 14)
        return false;
    // Verifica se todos os digitos são iguais
    if (preg_match('/(\d)\1{13}/', $cnpj))
        return false;
    $b = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
    for ($i = 0, $n = 0; $i < 12; $n += $cnpj[$i] * $b[++$i]);
    if ($cnpj[12] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
        return false;
    }
    for ($i = 0, $n = 0; $i <= 12; $n += $cnpj[$i] * $b[$i++]);
    if ($cnpj[13] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
        return false;
    }
    return true;
}

//valida cpf
if (!(validar_cnpj($_POST['documento']) || validaCPF($_POST['documento']))) {
    $error = "CPF ou CNPJ inválido";
    $_SESSION['error'] = $error;
    header("location: ../error.php");
    exit;
}


$users = usuarios($conexao);
function usuarios($conexao)
{
    $sqlBusca = 'SELECT * FROM tb_doador';
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}

//Validar o campo do email
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Email inválido";
    $_SESSION['error'] = $error;
    header("location: ../error.php");
    exit;
}

// Verificar se a senha tem menos de 8 caracteres
if (strlen($_POST['senha']) < 8) {
    $error = "A senha deve conter pelo menos 8 caracteres";
    $_SESSION['error'] = $error;
    header("location: ../error.php");
    exit;
}

// validar a existencia do usuario 
while ($dados = $users->fetch_assoc()) {
    if ($_POST['documento'] == $dados['DOCUMENTO']) {
        $error = "Documento já registrado";
        $_SESSION['error'] = $error;
        header("location: ../error.php");
        exit;
    }

    if ($_POST['email'] == $dados['EMAIL']) {
        $error = "Email já está em uso";
        $_SESSION['error'] = $error;
        header("location: ../error.php");
        exit;
    }
}

// Verificar se as senhas são as mesmas
if ($_POST['senha'] !== $_POST['senha-confirmar']) {
    $error = "As senhas não se coincidem";
    $_SESSION['error'] = $error;
    header("location: ../error.php");
    exit;
}
function gravarDoador($conexao)
{
    $sql = "insert into tb_doador
        (nm_doador, nm_user, email, documento)
        values
        (
            '{$_POST['nome-completo']}',
            '{$_POST['nomeusuario']}',
            '{$_POST['email']}',
            '{$_POST['documento']}'
        )";
    return mysqli_query($conexao, $sql);
}
function gravarUser($conexao)
{
    $getDoadorID = "SELECT CD_DOADOR FROM TB_DOADOR WHERE DOCUMENTO = '{$_POST['documento']}'";
    $result = $conexao -> query($getDoadorID);
    $row = mysqli_fetch_assoc($result);
    $passHash = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO TB_USERS
        (CD_DOADOR, TIPO_USER, LOGIN, SENHA)
        VALUES
        (
            {$row['CD_DOADOR']},
            'Doador',
            '{$_POST['documento']}',
            '{$passHash}'
        )";
    return mysqli_query($conexao, $sql);
}

if (gravarDoador($conexao)) {
    if (gravarUser($conexao)) {
        header('location: ../logindoador.php');
    }
} else {
    echo 'Erro na gravação';
}
