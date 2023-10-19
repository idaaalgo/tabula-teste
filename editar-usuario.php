<h1>Editar Usuário</h1>

<?php
    $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
    $res = $conexao -> query($sql);
    $row = $res -> fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?=$row->id;?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?=$row->nome;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" value="<?=$row->username;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?=$row->email;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" value="<?=$row->telefone;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" value="<?=$row->endereco;?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>