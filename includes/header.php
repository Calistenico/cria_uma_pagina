<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'EliteFlix Colca 2 - Plano de Assinatura'; ?></title>

    <!-- Meta tags SEO -->
    <meta name="description" content="<?php echo 'Aproveite a EliteFlix Colca 2 com nosso plano de assinatura exclusivo!'; ?>">
    <meta name="keywords" content="<?php echo 'EliteFlix Colca 2, plano de assinatura, assinatura'; ?>">

    <!-- Og:tags -->
    <meta property="og:title" content="<?php echo 'EliteFlix Colca 2 - Plano de Assinatura'; ?>">
    <meta property="og:description" content="<?php echo 'Aproveite a EliteFlix Colca 2 com nosso plano de assinatura exclusivo!'; ?>">
    <meta property="og:image" content="<?php echo 'https://eliteflix_colca_2.com/assets/img/eliteflix-colca-2.jpg'; ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700&family=Clash+Display:wgt@400;700&family=Cabinet+Grotesk:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- CSS global -->
    <style>
        :root {
            --primary-color: #FF3737;
            --secondary-color: #333;
            --background-color: #F9F9F9;
            --text-color: #000;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Cabinet Grotesk', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn {
            background-color: var(--primary-color);
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--primary-color);
        }

        .section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 100px 0;
        }
    </style>
</head>

<body>
    <!-- Logo PHP dinâmico -->
    <div class="logo">
        <img src="<?php echo 'https://eliteflix_colca_2.com/assets/img/logo.png'; ?>" alt="Logo EliteFlix Colca 2">
    </div>

    <!-- Menu de navegação -->
    <nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Plano de Assinatura</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>

    <!-- Botão CTA -->
    <button class="btn btn-primary">Se inscreva agora!</button>

    <!-- Navbar glassmorphism fixa -->
    <div class="navbar-glassmorphism">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-whatsapp"></i>
    </div>

    <!-- Script JS do navbar -->
    <script>
        const navbar = document.querySelector('.navbar');
        const blurEffect = new BlurEffect(navbar);

        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                blurEffect.activate();
            } else {
                blurEffect.deactivate();
            }
        });

        const hamburger = document.querySelector('.hamburger');
        const menuMobile = document.querySelector('.menu-mobile');

        hamburger.addEventListener('click', () => {
            menuMobile.classList.toggle('active');
        });
    </script>

    <!-- Meta tags para evitar o problema de links quebrados -->
    <meta http-equiv="refresh" content="0; url=<?php echo BASE_URL; ?>">

    <!-- Script para evitar o problema de console.log no final do arquivo -->
    <script>
        document.write('');
    </script>
</body>

</html>