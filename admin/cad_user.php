<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuários</title>
</head>

<body>
    <form action="cad_userOk.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Digite o nome do Usuário:</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite o login do Usuário:</label>
            <input type="text" class="form-control" name="login" placeholder="Login">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite a senha do Usuário:</label>
            <input type="text" class="form-control" name="senha" placeholder="Senha">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn tbn-dark">Cadastrar</button>
        </div>
    </form>
</body>
</html>