<?php
/**
* As configurações básicas do WordPress
*
* O script de criação wp-config.php usa esse arquivo durante a instalação.
* Você não precisa usar o site, você pode copiar este arquivo
* para "wp-config.php" e preencher os valores.
*
* Este arquivo contém as seguintes configurações:
*
* * Configurações do banco de dados
* * Chaves secretas
* * Prefixo do banco de dados
* * ABSPATH
*
* @link https://wordpress.org/documentation/article/editing-wp-config-php/
*
* @package WordPress
*/

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cedocript_cod9845dados');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'cedocript_cod9845user');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'novahsn80201010');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
* Chaves únicas de autenticação e salts.
*
* Altere cada chave para um frase única!
* Você pode gerá-las
* usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
* secret-key service}
* Você pode alterá-las a qualquer momento para invalidar quaisquer
* cookies existentes. Isto irá forçar todos os
* usuários a fazerem login novamente.
*
* @since 2.6.0
*/
define('AUTH_KEY', 'yCyKHBk39n78L5jdGNynFcm+yW9uCPvlnr0MRZZ+7SLrWOkI6egO5Tjipsyk9L/H');
define('SECURE_AUTH_KEY', 'yy/slyoB4nFSQEa8pWci7cbz+3KUMYb70jdzNES1JDc0Q5GtNNQI4H5n8RPDqzwM');
define('LOGGED_IN_KEY', 'srVrxC1KpT6e5oISZL4p9ksxSkwJRr7ZvwBDBnFk4rUDPt5gkOwTzhJ9zpvSWFCx');
define('NONCE_KEY', 'PdyZMR1aEN9NdkcNJzFwErzpYEP/J9A/YK9mX5966CEDssUdizNo6fDApAZCf4Vs');
define('AUTH_SALT', 'eogqYDyIvALv0Odw2W6sVVr9aOJx500qHh0XQPhh8UN1zH/Wea0HsJi5WyNa8YEd');
define('SECURE_AUTH_SALT', 'nJWDXAJVprlEokCYdleTfX8fJ40RKX1toLV6si3JrEIpZd4GIxFtrSIPIzIxKnEK');
define('LOGGED_IN_SALT', 'J7ei9kx4k3S8qz/NpVi47p3NQ4ahqie59fceaOzKEOcJ/++wpEFu4qXrdasA7zbH');
define('NONCE_SALT', '6pbqwdWidcdvT6oXW6SmQhqhBGPlUbseeiLf9ohX+An86ogJGA1cIZm3d90pnCCA');

/**#@-*/

/**
* Prefixo da tabela do banco de dados do WordPress.
*
* Você pode ter várias instalações em um único banco de dados se você der
* um prefixo único para cada um. Somente números, letras e sublinhados!
*/
$table_prefix = 'wp_';

/**
* Para desenvolvedores: Modo de debug do WordPress.
*
* Altere isto para true para ativar a exibição de avisos
* durante o desenvolvimento. É altamente recomendável que os
* desenvolvedores de plugins e temas usem o WP_DEBUG
* em seus ambientes de desenvolvimento.
*
* Para informações sobre outras constantes que podem ser utilizadas
* para depuração, visite o Codex.
*
* @link https://wordpress.org/documentation/article/debugging-in-wordpress/
*/
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
