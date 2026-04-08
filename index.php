<?php
session_start();

include 'includes/header.php';

$config = include 'config.php';
$whatsapp = $config['whatsapp'];
$email = $config['email'];
$preco = $config['preco'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EliteFlix Colca 2 - Plano Mais Popular</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700&family=Clash+Display&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-vermelha">
    <?php include 'includes/footer.php'; ?>

    <section class="hero">
        <div class="container">
            <h1 class="text-5xl font-bold text-branco">Plano Mais Popular da EliteFlix Colca 2</h1>
            <p class="text-lg text-branco">Acessa mais de 1000 filmes e séries originais, com alta definição e sem anúncios.</p>
            <button class="bg-vermelha hover:bg-vermelho-escuro text-branco font-bold py-2 px-4 rounded" onclick="location.href='comprar.php'">Comprar Agora</button>
        </div>
    </section>

    <section class="beneficios">
        <div class="container">
            <h2 class="text-3xl font-bold text-branco">Benefícios da EliteFlix Colca 2</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="card glassmorphism">
                    <i class="fa-brands fa-blu-ray text-lg"></i>
                    <p>Acessa mais de 1000 filmes e séries originais</p>
                </div>
                <div class="card glassmorphism">
                    <i class="fa-brands fa-4k text-lg"></i>
                    <p>Resolução 4K para uma experiência de visualização perfeita</p>
                </div>
                <div class="card glassmorphism">
                    <i class="fa-brands fa-no-signal text-lg"></i>
                    <p>Nenhum anúncio, apenas entretenimento</p>
                </div>
            </div>
        </div>
    </section>

    <section class="como-funciona">
        <div class="container">
            <h2 class="text-3xl font-bold text-branco">Como Funciona a EliteFlix Colca 2</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="card glassmorphism">
                    <i class="fa-solid fa-play-circle text-lg"></i>
                    <p>Acessa seus filmes e séries favoritos com apenas um clique</p>
                </div>
                <div class="card glassmorphism">
                    <i class="fa-solid fa-search text-lg"></i>
                    <p>Encontre novos filmes e séries com nossa busca avançada</p>
                </div>
                <div class="card glassmorphism">
                    <i class="fa-solid fa-user text-lg"></i>
                    <p>Crie sua conta e aproveite benefícios exclusivos</p>
                </div>
            </div>
        </div>
    </section>

    <section class="depontimentos">
        <div class="container">
            <h2 class="text-3xl font-bold text-branco">Depoimentos da EliteFlix Colca 2</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="card glassmorphism">
                    <i class="fa-solid fa-star text-lg"></i>
                    <p>"A EliteFlix Colca 2 é a melhor opção para quem busca entretenimento de alta qualidade"</p>
                    <img src="assets/img/depoimento1.jpg" alt="Depoimento 1">
                </div>
                <div class="card glassmorphism">
                    <i class="fa-solid fa-star text-lg"></i>
                    <p>"A EliteFlix Colca 2 é incrível! Acessei mais de 1000 filmes e séries originais"</p>
                    <img src="assets/img/depoimento2.jpg" alt="Depoimento 2">
                </div>
            </div>
        </div>
    </section>

    <section class="preco">
        <div class="container">
            <h2 class="text-3xl font-bold text-branco">Preço da EliteFlix Colca 2</h2>
            <p>Rs. 55,00 por mês</p>
            <button class="bg-vermelha hover:bg-vermelho-escuro text-branco font-bold py-2 px-4 rounded" onclick="location.href='comprar.php'">Comprar Agora</button>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <h2 class="text-3xl font-bold text-branco">Perguntas Frequentes</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="faq1">
                        <button class="bg-vermelha hover:bg-vermelho-escuro text-branco font-bold py-2 px-4 rounded">Pergunta 1</button>
                    </h3>
                    <div id="faq1-content" class="accordion-collapse collapse show">
                        <p>Resposta 1</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="faq2">
                        <button class="bg-vermelha hover:bg-vermelho-escuro text-branco font-bold py-2 px-4 rounded">Pergunta 2</button>
                    </h3>
                    <div id="faq2-content" class="accordion-collapse collapse show">
                        <p>Resposta 2</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-final">
        <div class="container">
            <h2 class="text-3xl font-bold text-branco">Acessar Agora e Comece a Desfrutar da EliteFlix Colca 2</h2>
            <button class="bg-vermelha hover:bg-vermelho-escuro text-branco font-bold py-2 px-4 rounded" onclick="location.href='comprar.php'">Comprar Agora</button>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>