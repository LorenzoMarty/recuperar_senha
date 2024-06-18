<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "conecta.php";
$conexao = conectar();

$email = $_POST['email'];
$sql = "SELECT * FROM usuario WHERE email='$email'";
$resultado = executarSQL($conexao, $sql);

$usuario = mysqli_fetch_assoc($resultado);
if($usuario == null){
    echo "Email não cadastrado! Faca o cadastro e em seguida realize o login.";
    die();
}
//gerar um token único
$token = bin2hex(random_bytes(50));

require_once 'PHPMailer-6.5.1/src/PHPMailer.php';
require_once 'PHPMailer-6.5.1/src/SMTP.php';
require_once 'PHPMailer-6.5.1/src/Exception.php';

$mail = new PHPMailer();
try{
    //config
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->setLanguage('br');
    //$mail->SMTPDebug = SMTP::DEBUG_OFF; //tira as mensagens de erro
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //imprime as mensagens de erro
    $mail->isSMTP(); //envia o email usando SMTP
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'lorenzo.2022310934@aluno.iffar.edu.br';
    $mail->Password = '31072005';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
} catch(Exception $e){
    echo "Não foi possível enviar o email.
    Mailer Erro: {$mail->ErrorInfo}";
}