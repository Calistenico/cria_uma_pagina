<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EliteFlix Colca 2 - Footer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <footer class="rodape">
        <div class="logo">
            <img src="assets/img/logo.png" alt="Logo EliteFlix Colca 2">
        </div>
        <nav class="colunas-links">
            <ul>
                <li><a href="#">Planos</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
        <div class="redes-sociais">
            <ul>
                <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
        <button class="whatsapp-flutuante" onclick="enviarMensagemWhatsApp()">Enviar Mensagem</button>
    </footer>
    <script src="assets/js/scroll-reveal.min.js"></script>
    <script src="assets/js/contador-animado.js"></script>
    <script src="assets/js/faq-accordion.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>
    <script>
        function enviarMensagemWhatsApp() {
            var whatsappLink = 'https://wa.me/?phone=55519999999';
            window.open(whatsappLink, '_blank');
        }
        
        var anoAtual = new Date().getFullYear();
        document.write('<p>&copy; ' + anoAtual + ' EliteFlix Colca 2. Todos os direitos reservados.</p>');
    </script>
</body>
</html>

<script src="https://kit.fontawesome.com/your-font-awesome-id.js" integrity="sha384-xOOLGHUOvI6ZrP5YIFNldPIJgten58JbM2a0p/ke0fer72SgbG4C+Z3plkhccXsaW4B" crossorigin="anonymous"></script>