
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuário - SkyNet</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/buttons_style.css">
    <link rel="stylesheet" href="css/form_style.css">

</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="SkyNet Logo">
        </div>
        <div class="title">
            <h1>SkyNet Cadastro de Clientes</h1>
        </div>
    </header>

    <form method="POST" action="index.php?action=add_user">
        <h2>Adicionar Usuário</h2>
        
        <label for="nome">NOME:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>

        <label for="plano">PLANO:</label>
        <select id="plano" name="plano" required>
            <option value="">Selecione um plano</option>
            <option value="Simples">Simples</option>
            <option value="Médio">Médio</option>
            <option value="Terminator">Terminator</option>
        </select>

        <label for="status">STATUS:</label>
        <select id="status" name="status" required>
            <option value="">Selecione um status</option>
            <option value="Ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
        </select>

        <button type="submit">Adicionar Usuário</button>
        <button type="button" class="red" onclick="window.location.href='index.php?action=home'">Cancelar</button>
        
    </form>
    </form>
</body>
</html>
