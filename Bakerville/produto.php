<?php
// Carrega os produtos do arquivo JSON
$produtos = json_decode(file_get_contents('produtos.json'), true);

// Obtém o ID do produto da URL
$id = isset($_GET['id']) ? $_GET['id'] : null;
$produto = null;

// Encontra o produto pelo ID
if ($id !== null) {
    foreach ($produtos as $item) {
        if ($item['id'] == $id) {
            $produto = $item;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $produto ? htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') : 'Produto não encontrado' ?></title>
    <link rel="stylesheet" href="css/style_pg_produto.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
    <?php include 'header.php'; ?>
    <br><br><br><br>
    <main>
        <?php if ($produto): ?>
            <div class="product-container">
                <div class="product-image">
                    <img src="<?= htmlspecialchars($produto['imagem'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?>">
                </div>
                <div class="product-details">
                    <h1><?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?></h1>
                    <p><?= htmlspecialchars($produto['descricao'], ENT_QUOTES, 'UTF-8') ?></p>
                    <center><p class="price">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p> <br>
                    <button class="add-to-cart">Adicionar ao Carrinho</button></center>
                </div>
            </div>
        <?php else: ?>
            <p>Produto não encontrado.</p>
        <?php endif; ?>
        <button class="voltar" onclick="window.location.href='produtos.php'">Voltar</button>
    </main>
   <div class="footer">
    <?php include 'footer.php'; ?>
   </div>
    
</body>
</html>