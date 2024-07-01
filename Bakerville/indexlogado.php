<!DOCTYPE html>
<html>
<head>
    <title>Bakerville</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<style>
    *{margin: 0;
    padding: 0;
    }
</style>
<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
    <?php include 'headerlogado.php'; ?>
    <link rel="stylesheet" href="css/style.css" >

   
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carrosselverdeescuro.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrosselverdeclaro.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrosselrosa.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
     
<main>
    <div class="container mt-5">
        <h2 style="color: #8C4008; padding: 30px; font-size: 60px;">Novo cardapio</h2>
        <div class="row">
            <?php
            $produtos = json_decode(file_get_contents('produtos.json'), true);
            foreach (array_slice($produtos, 0, 3) as $produto): ?>
                <section class="produto col-md-4">
                    <img src="<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>" class="img-fluid">
                    <a href="produto.php?id=<?= $produto['id'] ?>" class="ver-mais">adicionar ao carrinho</a>
                    <h2><?= $produto['nome'] ?></h2>
                    <p style="font-size: 30px; font-weight: bold; color: #000000;">Preço: R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                </section>
            <?php endforeach; ?>
        </div>
        <div class="text-center">
            <a href="produtos.php" class="btn-ver-todos">Ver Todos</a>
        </div>
    </div>
</main>
<section id="features">
<h2 style="color: #8C4008; padding: 30px; font-size: 70px;">Sobre nós</h2>
        <p style="font-size: 25px; color: #000000;">Somos uma empresa que surgiu com o objetivo de trazer a qualidade alimentar. A vontade da criadora da loja era trazer aos 
        brasileiros esfomeados, doces que fossem deliciosos, mas ao mesmo tempo saúdaveis, para que fossem aprovietados com mais emoção
        e sem a tristeza de pensar que no futuro o doce vai acabar com a sua qualidade de vida.
        Nossos pilares princípais são:</p>
      <ul style="font-size: 25px; color: #000000;">
        <li><i class="fas fa-lock"></i>Alegria(da felicidade de uma criaça comendo um bolo, até um idoso sorrindo pela torta de maçã)</li>
        <li><i class="fas fa-cloud"></i>Amor(principalmente o da familia unida comendo um belo doce)</li>
        <li><i class="fas fa-mobile-alt"></i>Amizade(amigos são aqueles que sentão para tomar um café e falar que aquela pessoa que você está apaixonada é a certa ou a errada)</li>
      </ul>
    </section>
    <section id="doceria" class="doceria">
  <h2 style="color: #8C4008; padding: 30px; font-size: 70px;">Momentos nossos</h2>
  <p style="font-size: 25px; color: #000000;">Nossa cafeteria é repleta de alegria e momentos bons, veja só:</p>
  <div id="carouselDoceria" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
    <li data-target="#carouselDoceria" data-slide-to="0" class="active"></li>
    <li data-target="#carouselDoceria" data-slide-to="1"></li>
    <li data-target="#carouselDoceria" data-slide-to="2"></li>
    <li data-target="#carouselDoceria" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/doceria1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/doceria2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/doceria3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/doceria4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselDoceria" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselDoceria" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
</section>
<br>
<br>
<br>
<footer>
  <p>&copy; 2024 - Site Feito por Giovanna e Angélica. Todos os direitos reservados.</p>
  <p>Atividade final de bimestre, PHP e JSON.</p>
  <ul>
    <li>Contato: 97098-3573</li>
    <li>instagram: @intagramteste</li>
  </ul>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>