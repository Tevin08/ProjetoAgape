
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="./js/script.js" defer></script>
    <title>send email</title>
  </head>
  <body>

  <h1>Olá</h1>
<?php

ini_set("SMTP", "localhost");
ini_set("smtp_port", "55");
// Rest of your code
$to = 'estevaopsg08@gmail.com';
$assunto = 'Roubaram a minha paçoca';
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
// The message
$message = "Barras e Barras\r\ncê pensa que meu freestyle é uma diss\r\nQuando eu parei você era um murica agora que voltei o puto de paris? ";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send

mail($to, $assunto, $message, $headers);
?>

  </body>
</html>




<!-- <?php
// require 'mailer/PHPMailerAutoload.php';
// session_start();

// if (isset($_SESSION['id_user'])) {
//   header('location: verOngs.php');
//   exit();
// }

// $mail = new PHPMailer();
// $mail->isSMTP();
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = 'tls';
// $mail->Username = 'GalaxiaZern14@gmail.com';
// $mail->Password = 'nuggets0809';
// $mail->Port = 587;

// $mail->setFrom('GalaxiaZern14@gmail.com');
// $mail->addReplyTo('GalaxiaZern114@gmail.com');
// $mail->addAddress('estevaopsg08@gmail.com', 'DÓRIA' );
// $mail->addAddress('estevaopsg08@gmail.com', 'BAtata');
// $mail->addCC('estevaopsg08@gmail.com', 'Cópia');
// $mail->addBCC('estevaopsg08@gmail.com', 'Cópia Oculta');

// $mail->isHTML(true);
// $mail->Subject = 'Assunto do email';
// $mail->Body    = 'Quem ta lendo come o <b>Dória</b>';
// $mail->AltBody = 'garganta';
// $mail->addAttachment('./imagens/icon-coracao.png', 'coração.png');

// if(!$mail->send()) {
//     echo 'Não foi possível enviar a mensagem.<br>';
//     echo 'Erro: ' . $mail->ErrorInfo;
// } else {
//     echo 'Mensagem enviada.';
// }
?> -->