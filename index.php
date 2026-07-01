<?php
require_once 'config.php';

$logado = isset($_SESSION['usuario_logado']);
$tipo = $_SESSION['tipo_usuario'] ?? '';

$classe_header = "header";
if ($logado) {
    if ($tipo === 'adm') {
        $classe_header = "header header_adm"; 
    } elseif ($tipo === 'mod') {
        $classe_header = "header header_mod"; 
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Credenciais</title>
</head>
<body>

<div class="<?php echo $classe_header; ?>">

        <h1><?php echo $logado ? "Olá, " . $_SESSION['usuario_logado'] : "Header"; ?></h1>

        <nav>
            <?php if (!$logado): ?>
                <form action="login.php" method="POST">
                    <label for="user">Usuário:</label>
                    <input type="text" id="user" name="user" required>
                    <label for="pass">Senha:</label>
                    <input type="password" id="pass" name="pass" required>

                    <button type="submit">Entrar</button>
                </form>
            <?php else: ?>
                <a href="logout.php">Sair</a>
            <?php endif; ?>
        </nav>

    </div>

<div class="container">

      <?php if ($logado): ?>
          <div class="sidebar">Menu da sidebar</div>
      <?php endif; ?>
      
      <div class="content">
          <h1>
              <?php 
              if ($logado) {
                  if ($tipo === 'adm') echo "Painel de Administrador";
                  if ($tipo === 'mod') echo "Painel de Moderador";
                  if ($tipo === 'user') echo "Painel de Usuário";
              } else {
                  echo "Conteúdo do miolo";
              }
              ?>
          </h1>
      </div>

    </div>
</body>
</html>