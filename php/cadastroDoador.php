<?php

include "banco.php";

session_start();

function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
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
    echo "Email inválido";
    $_SESSION['error'] = "Error";
    header("location: ../error.php");
    exit;
}

// Verificar se a senha tem menos de 8 caracteres
if (strlen($_POST['senha']) < 8) {
    echo "A senha deve conter pelo menos 8 caracteres";
    $_SESSION['error'] = "Error";
    header("location: ../error.php");
    exit;
}

if (!validaCPF($_POST['documento'])) {
    echo "CPF inválido";
    $_SESSION['error'] = "Error";
    header("location: ../error.php");
    exit;
}
// validar a existencia do usuario 
while ($dados = $users->fetch_assoc()) {
    if ($_POST['documento'] == $dados['documento']) {
        echo "Documento já registrado";
        $_SESSION['error'] = "Error";
    header("location: ../error.php");
        exit;
    }
    if ($_POST['email'] == $dados['email']) {
        echo "Email já está em uso";
        $_SESSION['error'] = "Error";
    header("location: ../error.php");
        exit;
    }
}
// Verificar se as senhas são as mesmas
if ($_POST['senha'] !== $_POST['senha-confirmar']) {
    echo "As senhas não se coincidem";
    $_SESSION['error'] = "Error";
    header("location: ../error.php");
    exit;
}
function gravar($conexao)
{
    $passHash = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $sql = "insert into tb_doador
        (nm_doador, nm_user, email, senha, documento)
        values
        (
            '{$_POST['nome-completo']}',
            '{$_POST['nomeusuario']}',
            '{$_POST['email']}',
            '{$passHash}',
            '{$_POST['documento']}'
        )";
    return mysqli_query($conexao, $sql);
}

if (gravar($conexao)) {
    header('location: ../logindoador.php');
} else {
    echo 'Erro na gravação';
}
