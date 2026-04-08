<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EliteFlix Colca</title>
  <style>
    /* Estilos para a página */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .hero {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    .botao-comprar {
      background-color: #4CAF50;
      border: none;
      color: #fff;
      cursor: pointer;
      padding: 10px 20px;
      margin: 0 10px;
      display: inline-block;
    }
    
    .botao-comprar:hover {
      background-color: #3e8e41;
    }
    
    .benefícios ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .benefícios li {
      margin-bottom: 10px;
    }
    
    .cta {
      text-align: center;
      padding: 20px;
    }
  </style>
</head>
<body>
  <section class="hero">
    <h1>EliteFlix Colca</h1>
    <p>A melhor opção para assistir seus filmes favoritos</p>
    <button class="botao-comprar" data-plano="20">Plano 20</button>
    <button class="botao-comprar" data-plano="55">Plano 55</button>
    <button class="botao-comprar" data-plano="100">Plano 100</button>
  </section>

  <section class="benefícios">
    <h2>Benefícios</h2>
    <ul>
      ${Object.values(planos).map((plano) => `
        <li>${plano.benefícios.join(', ')}</li>
      `).join('')}
    </ul>
  </section>

  <section class="cta">
    <h2>Compre agora e comece a assistir!</h2>
    <button class="botao-comprar">Comprar</button>
  </section>

  <script src="script.js"></script>
</body>
</html>