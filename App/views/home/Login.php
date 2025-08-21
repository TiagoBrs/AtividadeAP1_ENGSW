<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Login de Administrador</h2>

    <form action="index.php?action=login_admin_post" method="POST">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
<?php if ($erro): ?>
    <p><?= $erro ?></p>
<?php endif; ?>
</body>
</html