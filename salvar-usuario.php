<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $senha = $_POST["senha"];
            $endereco = $_POST["endereco"];

            $sql = "INSERT INTO usuario (nome, username, email, telefone, senha, endereco) VALUES ('$nome', '$username', '$email', '$telefone', '$senha', '$endereco')";
            $res = $conn->query($sql);

            break;
        case 'editar':

    }