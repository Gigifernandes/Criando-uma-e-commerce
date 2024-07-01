<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Leitura do arquivo JSON e adição do novo produto
    $produtos = json_decode(file_get_contents('produtos.json'), true);
    $novoProduto = [
        'id' => uniqid(),
        'nome' => $_POST['nome'],
        'descricao' => $_POST['descricao'], // Add this line to store the description
        'preco' => $_POST['preco'],
        'imagem' => $_POST['foto'] // Usando a mesma chave 'imagem'
    ];
    $produtos[] = $novoProduto;
    file_put_contents('produtos.json', json_encode($produtos));
    $mensagemSucesso = "Produto cadastrado com sucesso!";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cadastrar produto</title>
<link rel="shortcut icon" href="img/favicon.ico">
<style>
    *{margin: 0;
    padding: 0;
    }
</style>
 </head>
<body>
<?php include 'header.php';?>
<link rel="stylesheet" href="css/style_cadastrar.css" >
<br> <br><br>
  <main> 
     <h1 class="h1" style="color: #1D4A3E; padding: 0px; font-size: 35px;">Cadastrar Produto</h1>
     <br>
     <br>
    <form method="post" class="form">
        Nome: <input type="text" name="nome" required> 
        Descrição: <input type="text" name="descricao" required> 
        Preço: <input type="number" name="preco" step="0.01" required>
        URL da Foto: <input type="url" name="foto" required>

        <br>
        <br>


    <center>
        <?php if (isset($mensagemSucesso)) {?>
            <p style="color: black; font-size: 20px;"><?php echo $mensagemSucesso;?></p>
        <?php }?>
        <br>
        <br>
        <input type="submit" value="Cadastrar" class="b_cadastrar">
        <a href="index.php" class="voltar">Voltar</a>
    </center>
    </form>
  </main>
    <br>
    <br><br><br><br>
    <?php include 'footer.php'; ?>
    
</body>
</html>