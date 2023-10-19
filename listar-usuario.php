<h1>Listar usuários</h1>
<?php
    $sql = "SELECT * FROM usuarios";
    $res = $conn -> query($sql);
    $qtd = $res -> num_rows;

    if ($qtd > 0) {
        echo "<table class='table table-hover table-striped table-bordered'>";
        echo "<tr>";
        echo "<td>#</td>";
        echo "<td>Nome</td>";
        echo "<td>Nome de Usuário</td>";
        echo "<td>E-mail</td>";
        echo "<td>Telefone</td>";
        echo "<td>Senha</td>";
        echo "<td>Endereço</td>";
        echo "<td>Ações</td>";
        echo "</tr>";
        while ($row = $res -> fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row -> id . "</td>";
            echo "<td>" . $row -> nome . "</td>";
            echo "<td>" . $row -> username . "</td>";
            echo "<td>" . $row -> email . "</td>";
            echo "<td>" . $row -> telefone . "</td>";
            echo "<td>" . $row -> senha . "</td>";
            echo "<td>" . $row -> endereco . "</td>";
            echo "<td><button onclick=\"location.href='?page=editar&id=" . $row -> id . "';\" class='btn btn-success'>Editar</button><button onclick=\"location.href='?page=excluir&id=" . $row -> id . "'; class='btn btn-danger'>Excluir</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>Não foram encontrados resultados!</p>";
    }
?>