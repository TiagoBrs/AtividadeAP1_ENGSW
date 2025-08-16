<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title> 
    <link rel="stylesheet" href="css/style.css">   
</head>
<body>
    <form action="index.php?action=atualizar" method="POST">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        Nome: <input type="text" name="nome" value="<?= $usuario['nome'] ?>"><br>
        CPF: <input type="text" name="cpf" value="<?= $usuario['cpf'] ?>"><br>

        <label>Plano:</label>
        <select name="plano" required>
            <option value="Simples" <?= $usuario['plano'] == 'Simples' ? 'selected' : '' ?>>Simples</option>
            <option value="Médio" <?= $usuario['plano'] == 'Médio' ? 'selected' : '' ?>>Médio</option>
            <option value="Terminator" <?= $usuario['plano'] == 'Terminator' ? 'selected' : '' ?>>Terminator</option>
        </select><br>

        <label>Status:</label>
        <select name="status" required>
            <option value="Ativo" <?= $usuario['status'] == 'Ativo' ? 'selected' : '' ?>>Ativo</option>
            <option value="Inativo" <?= $usuario['status'] == 'Inativo' ? 'selected' : '' ?>>Inativo</option>
        </select><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
