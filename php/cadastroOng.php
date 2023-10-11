<?php

include "banco.php";
function validar_cnpj($cnpj) {
    // Verificar se foi informado
  if(empty($cnpj))
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

session_start();

$users = usuarios($conexao);
function usuarios($conexao)
{
    $sqlBusca = 'SELECT * FROM tb_ong';
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}
if (!validar_cnpj($_POST['CNPJ']) ) {
    $error = "CNPJ inválido";
    $_SESSION['error'] = $error;
    header("location: ../error.php");
    exit;
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

// Verificar se as senhas são as mesmas
if ($_POST['senha'] !== $_POST['senha2']) {
    $error = "As senhas não se coincidem";
    $_SESSION['error'] = $error;
    header("location: ../error.php");
    exit;
}

//validar a existencia do usuario
while ($dados = $users->fetch_assoc()) {
    if ($_POST['CNPJ'] == $dados['cnpj']) {
        $error = "CNPJ já registrado.";
        $_SESSION['error'] = $error;
        header("location: ../error.php");
        exit;
    }
    if ($_POST['email'] == $dados['email']) {
        $error = "Email já está em uso";
        $_SESSION['error'] = $error;
        header("location: ../error.php");
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
    header('location: ../loginOngs.php');
} else {
    echo 'Erro na gravação';
}
