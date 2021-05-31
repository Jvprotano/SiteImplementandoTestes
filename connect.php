<?php  

$hostname = "localhost";
$user = "id16182657_formm";
$password = "Adm@19881234";
$database = "id16182657_formadm";
$conexao = mysqli_connect($hostname,$user,$password,$database);


if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
?>