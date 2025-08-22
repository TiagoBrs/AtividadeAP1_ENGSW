<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title> 
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/buttons_style.css">
    <link rel="stylesheet" href="css/form_style.css"> 

</head>
<body>
    <form action="index.php?action=atualizar" method="POST">
        
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

        <label for="name">NOME:</label>
        <input id = "name" type="text" name="nome" value="<?= $usuario['nome'] ?>"><br>
        
        <label for="cpf">CPF:</label>
        <input id ="cpf" type="text" name="cpf" value="<?= $usuario['cpf'] ?>"><br>

        <label for="plano">PLANO:</label>
        <select id="plano" name="plano" required>
            <option value="Simples" <?= $usuario['plano'] == 'Simples' ? 'selected' : '' ?>>Simples</option>
            <option value="Médio" <?= $usuario['plano'] == 'Médio' ? 'selected' : '' ?>>Médio</option>
            <option value="Terminator" <?= $usuario['plano'] == 'Terminator' ? 'selected' : '' ?>>Terminator</option>
        </select><br>

        <label for="status">STATUS:</label>
        <select id = "status" name="status" required>
            <option value="Ativo" <?= $usuario['status'] == 'Ativo' ? 'selected' : '' ?>>Ativo</option>
            <option value="Inativo" <?= $usuario['status'] == 'Inativo' ? 'selected' : '' ?>>Inativo</option>
        </select><br>

        <button type="submit">Salvar</button>
        
        <button type="button" class="red" onclick="window.location.href='index.php?action=home' ">Cancelar</button>
    </form>
</body>
</html>
