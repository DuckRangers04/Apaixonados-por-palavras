<?php
$usuario = 'root';
$senha = '';
$database = 'apai_por_pa';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);
if($mysqli -> error){
    die("Falha ao conectar com banco de dados: " . $mysqli ->error);
}
?>
