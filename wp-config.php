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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_curso' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'nAY8}=WHgAA<G%h%<@`KlAfvuBQD|ECovO&*8J0oXW]pPh#0F0~W|oXB^t#6`p;~' );
define( 'SECURE_AUTH_KEY',  '4>E)94D&v:,/^sk0Zo,RByN9aPaK8F6N/c 5VI.4Vm+R3yF%^Xhwu*@gc5}:CNoS' );
define( 'LOGGED_IN_KEY',    'K3 zZl;KJ/3:^Mxz6gAu;a:#)fdkW)g|Li&+Q`ROjxZ%%~pKp`h,Y^bLm`|%Xg3#' );
define( 'NONCE_KEY',        ')h%:YJvw(r75-1&Xo#Hf+ARx8rbSzwZ8}<nrnkG:U o~KjWF|bK#:Y,jH~61EByR' );
define( 'AUTH_SALT',        'Q9[<.:&4TCuEozRA=HX^BVeV[[9:8a[#S#KDs@XmAJY7 >oyf[g,VCy]2tDr~Aj7' );
define( 'SECURE_AUTH_SALT', ']NkG?~:z6y.XGnIH=xmvX Z#^Hg<AH.$V~*%XlpzM7Q=#Km9^<Y<t|j@zV22quz4' );
define( 'LOGGED_IN_SALT',   '*&(>B6Tf6S*4i5-|F7u&%pfSq3epMa|ejO6S=]=:c7Yy I`@CKHvpIz0#+a>`F-.' );
define( 'NONCE_SALT',       'l^t|6p$y3ofIn99Tu{P lO2z-o2$!>rWsCna_J>Hi(r()r)}cZTc4]J=uVe>WR_&' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
