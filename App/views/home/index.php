<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários SkyNet</title>
    <link rel="stylesheet" href="css/style.css">       
</head>
<body>
     <header>
      <div class="logo">
            <img src="img/logo.png" alt="SkyNet Logo">
      </div>

      <div class="title">
            <h1>SkyNet Cadastro de Clientes</p>
      </div>    
    </header>

    <div class="tabela-clientes-scroll">
        <div class="tabela-clientes">
                    <table class="tabela-clientes">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Plano</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($usuarios)): ?>
                                <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                                <td><?= $usuario['nome'] ?></td>
                                <td><?= $usuario['cpf'] ?></td>
                                <td><?= $usuario['plano'] ?></td>
                                <td><?= $usuario['status'] ?></td>
                                <td>
                                    <a class="button green" href="index.php?action=editar&id=<?= $usuario['id'] ?>">Editar</a>
                                    <a class="button red" href="index.php?action=excluir&id=<?= $usuario['id'] ?>">Excluir</a>
                                </td>
                            </tr>
                        
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="5">Nenhum usuário cadastrado.</td></tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
            <div class="botão-cadastrar">
                <a class="button green" href="index.php?action=cadastro">Cadastrar Cliente</a>
            </div>
        </div>
    </div>
    
</body>
</html>