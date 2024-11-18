<?php

$usuario = 'root';
$senha = '';
$database = 'crud_db';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die("Falha ao conectar ao Banco de Dados: ".$mysqli->error);
}

?>
