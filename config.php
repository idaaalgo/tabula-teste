<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'cadastro';

$conn = new mysqli($host,$user,$password,$database);

if ($conn -> connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
