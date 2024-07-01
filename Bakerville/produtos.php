<?php
$produtos = json_decode(file_get_contents('produtos.json'), true);
?>
<!DOCTYPE html>
<link rel="shortcut icon" href="img/favicon.ico">
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
 <style>
    *{margin: 0;
    padding: 0;
    }
</style>
<link rel="stylesheet" href="css/style_produtos.css">
</head>
<body>
        <?php include 'header.php'; ?>
       
    <main>
    <h2 style="color: #8C4008; padding: 25px; font-size: 60px;">Produtos disponiveis</h2>
        <div class="produtos-container">
            <?php if (!empty($produtos)): ?>
                <?php foreach ($produtos as $produto): ?>
                    <section class="produto-card">
                        <div class="ftproduto">
                            <img src="<?= htmlspecialchars($produto['imagem'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?>">
                        </div>
                        <h2><?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?></h2>
                        <div class="preco">
                            <p style="font-weight: bold; color: #333;">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                        </div>
                        <a href="produto.php?id=<?= urlencode($produto['id']) ?>" >Adicionar ao carrinho</a>
                    </section>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhum produto disponível no momento.</p>
            <?php endif; ?>
        </div>
        <br><br>
        <center>
            <button class="voltar" onclick="window.location.href='index.php'">Voltar</button>
        </center>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>