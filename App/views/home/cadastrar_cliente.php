
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Usuário</title>
</head>
<body>
    <h2>Adicionar Usuário</h2>
   <form method="POST" action="index.php?action=add_user">

        <label>Nome:</label>
        <input type="text" name="nome" required><br>

        <label>CPF:</label>
        <input type="text" name="cpf" required><br>

        <label>Plano:</label>
        <select name="plano" required>
            <option value="Simples">Simples</option>
            <option value="Médio">Médio</option>
            <option value="Terminator">Terminator</option>
        </select><br>

        <label>Status:</label>
        <select name="status" required>
            <option value="Ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
        </select><br>

        <button type="submit">Adicionar Usuário</button>
    </form>
</body>
</html>
