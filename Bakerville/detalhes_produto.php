<?php
$id = $_GET['id'];
$produtos = json_decode(file_get_contents('produtos.json'), true);
$produto = array_filter($produtos, function($prod) use ($id) {
    return $prod['id'] == $id;
});
$produto = array_shift($produto);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Detalhes do Produto</title>
</head>
<body>
<?php include 'header.php'; ?>
    <h1><?= $produto['nome'] ?></h1>
    <p>Preço: R$ <?= $produto['preco'] ?></p>
    <a href="produtos.php">Voltar</a>
</body>
</html>