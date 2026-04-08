<?php

define('SITE_NAME', 'EliteFlix Colca 2');
define('SITE_URL', 'https://eliteflixcolca2.com.br');
define('SITE_DESC', 'A melhor opção para assistir filmes e séries de alta qualidade');

define('WHATSAPP', '+55 5549 9999-9999');
define('EMAIL_CONTATO', 'contato@eliteflixcolca2.com.br');

define('PRECO_PLANO1', '20,00');
define('PRECO_PLANO2', '55,00');

if (!defined('TELEGRAM_BOT')) {
    define('TELEGRAM_BOT', '');
}

date_default_timezone_set('America/Sao_Paulo');

function whatsapp_link($msg) {
    return 'https://wa.me/' . WHATSAPP . '?text=' . urlencode($msg);
}

function format_price($valor) {
    $valor = (float)$valor;
    return number_format($valor, 2, ',', '.');
}

function is_business_hours() {
    $date = new DateTime();
    $hour = $date->format('H');
    if ($hour >= 9 && $hour < 18) {
        return true;
    } else {
        return false;
    }
}

if (!defined('SITE_NAME')) die();

?>