<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}


$pedidos = [
    [
        'numero_pedido' => '002',
        'data' => '28-06-2024',
        'total' => 'R$ 35,00',
        'status' => 'A caminho',
        'imagem_status' => 'img/a_caminho.png' 
    ],

    [
        'numero_pedido' => '001',
        'data' => '15-06-2024',
        'total' => 'R$ 49,00',
        'status' => 'Entregue',
        'imagem_status' => 'img/entregue.png'
    ]
];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meus Pedidos</title>
  <link rel="stylesheet" href="css/style_meus_pedidos.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300..900&display=swap">
</head>
<body>
  <header>
    <?php include 'headerlogado.php'; ?>
  </header>
  <main>
    <div class="card">
      <section class="form-section" id="meus-pedidos">
        <h1 class="title">Meus Pedidos</h1>
        <div class="produtos-container">
          <?php foreach ($pedidos as $pedido): ?>
            <div class="produto-card">
              <img src="<?php echo $pedido['imagem_status']; ?>" alt="<?php echo $pedido['status']; ?>" class="status-img">
              <h2>Pedido #<?php echo $pedido['numero_pedido']; ?></h2>
              <p>Data: <?php echo $pedido['data']; ?></p>
              <p>Total: <?php echo $pedido['total']; ?></p>
              <p>Status: <?php echo $pedido['status']; ?></p>
              <br>
              <a href="#">Detalhes</a>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </main>
  <br><br>
  <?php include 'footer.php'; ?>

  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="script/script.js"></script>
</body>
</html>