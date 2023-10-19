<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $senha = $_POST["senha"];
            $endereco = $_POST["endereco"];
            $sql = "INSERT INTO usuarios (nome, username, email, telefone, senha, endereco) VALUES ('$nome', '$username', '$email', '$telefone', '$senha', '$endereco')";
            $res = $conn->query($sql);
            if($res == true) {
                echo "<script>alert('Editado com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível cadastrar');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $senha = $_POST["senha"];
            $endereco = $_POST["endereco"];
            $sql = "UPDATE usuarios SET
                    nome='$nome',
                    username='$username',
                    email='$email',
                    telefone='$telefone',
                    senha='$senha'
                    WHERE id=" . $_REQUEST['id'];
            $res = $conn->query($sql);
            if($res == true) {
                echo "<script>alert('Editado com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível editar');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST['id'];
            $res = $conn->query($sql);
            if($res == true) {
                echo "<script>alert('Excluído com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível excluir');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
    }