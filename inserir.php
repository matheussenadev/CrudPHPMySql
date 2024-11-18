<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "crud_db";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$ql = $_POST['nome_produto'];
$id =0;

$resultUsuario = "INSERT INTO produtos (id, nome_produto) VALUES ('$id', '$ql')";
$resultadoUsuario = mysqli_query($conn, $resultUsuario);

if(mysqli_insert_id($conn)){

    header("Location: admin_page.php");

}else{
    echo "ERRO";
}


?>
