<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="css/style.css">
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

    <form action="index.php?action=login_admin_post" method="POST">
        <h2>Login Administrador</h2>
        <label for="adm_email">Email:</label>
        <input id="adm_email" type="email" name="email" required>

        <label for="adm_senha">Senha:</label>
        <input id="adm_senha" type="password" name="senha" required>

        <button type="submit">Entrar</button>

<?php if ($erro): ?>
    <p><?= $erro ?></p>
<?php endif; ?>

</body>
</html