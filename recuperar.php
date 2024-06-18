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