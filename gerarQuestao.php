<?php 
date_default_timezone_set('America/Sao_Paulo');

include_once("connect.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$sexo1 = $_POST['sexo'];

if($nascimento == null)
{
    $nascimento = '1900-01-01';
}

switch($sexo1) {
    case 0: 
        $sexo = 'Selecione';break;
    case 1: 
        $sexo = 'Masculino';break;
    case 2: 
        $sexo = 'Feminino';break;
    case 3: 
        $sexo = 'Outro'; break;
}

$sql = "INSERT INTO result (name, email, nascimento, sexo, data_inclusao, dataehora_inclusao) VALUES ('$nome', '$email','$nascimento','$sexo',now(), now())";

mysqli_query($conexao,$sql) or die(header('Location: /index.php')); 

header('Location: /share.php');
mysqli_close($conexao);


exit;

?>

