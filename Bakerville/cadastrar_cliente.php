<?php
session_start();

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $novo_usuario = [
        'username' => $username,
        'password' => $password
    ];

    $arquivo_json = 'clientes.json';

    if (file_exists($arquivo_json)) {
        $clientes = json_decode(file_get_contents($arquivo_json), true);
    } else {
        $clientes = [];
    }

    $clientes[] = $novo_usuario;


    if (file_put_contents($arquivo_json, json_encode($clientes, JSON_PRETTY_PRINT))) {
        $mensagem = 'Usuário cadastrado com sucesso!';
    } else {
        $mensagem = 'Erro ao salvar os dados do usuário.';
    }


    $_SESSION['username'] = $username;


    echo "<script>
        alert('Olá, $username! Seu login foi realizado com sucesso.');
        window.location.href = 'indexlogado.php';
    </script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style_cadastrar_user.css">
  <link rel="shortcut icon" href="img/favicon.ico">
  <style>
      * {
          margin: 0;
          padding: 0;
      }
  </style>
  <?php include 'header.php'; ?>
</head>
<body>
  <div class="card">
    <section class="form-section" id="sign-in">
      <h1 class="title">Entrar</h1>
      <div class="social">
        <div class="social-container">
          <iconify-icon icon="ri:facebook-fill"></iconify-icon>
        </div>
        <div class="social-container">
          <iconify-icon icon="mdi:google-plus"></iconify-icon>
        </div>
        <div class="social-container">
          <iconify-icon icon="ri:linkedin-fill"></iconify-icon>
        </div>
      </div>
      <div class="form">
        <span class="subtitle">ou use sua conta criada</span>
        <form method="POST" action="">
          <input type="email" class="form-field" name="username" placeholder="Email" required>
          <input type="password" class="form-field" name="password" placeholder="Senha" required>
          <div class="actions">
            <span class="forgot-password">Esqueceu a senha?</span>
            <button type="submit" class="form-btn">Entrar</button>
          </div>
        </form>
      </div>
    </section>
    <section class="form-section" id="sign-up">
      <h1 class="title">Crie uma conta</h1>
      <div class="social">
        <div class="social-container">
          <iconify-icon icon="ri:facebook-fill"></iconify-icon>
        </div>
        <div class="social-container">
          <iconify-icon icon="mdi:google-plus"></iconify-icon>
        </div>
        <div class="social-container">
          <iconify-icon icon="ri:linkedin-fill"></iconify-icon>
        </div>
      </div>
      <div class="form">
        <span class="subtitle">Ou utilize seu email</span>
        <form method="POST" action="">
          <input type="text" class="form-field" name="username" placeholder="Nome" required>
          <input type="email" class="form-field" name="email" placeholder="Email" required>
          <input type="password" class="form-field" name="password" placeholder="Senha" required>
          <div class="actions">
            <button type="submit" class="form-btn">Criar conta</button>
          </div>
        </form>
      </div>
    </section>
    <section class="call" id="sign-in-call">
      <h1 class="title">Bem-vindo novamente!</h1>
      <span class="subtitle">Clique no botão abaixo para logar na sua conta <br> Obrigada por voltar a nossa loja</span>
      <button class="call-btn" id="sign-in-call-btn">já tenho conta</button>
    </section>
    <section class="call hide" id="sign-up-call">
      <h1 class="title">Olá, seja bem-vindo!</h1>
      <span class="subtitle">Clique no botão abaixo para criar uma conta e iniciar suas compras <br> Agradecemos sua escolha</span>
      <button class="call-btn" id="sign-up-call-btn">quero criar uma conta</button>
    </section>
    <div id="cover"></div>
  </div>
  <br><br>
  
  <?php include 'footer.php'; ?>

  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="script/script.js"></script>
</body>
</html>