<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */


if (file_exists(dirname(__FILE__)."/wp-config.development.php"))
{
    include_once dirname(__FILE__)."/wp-config.development.php";
    return;
}


// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'flic');


/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');


/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'rootroot');


/** nome do host do MySQL */
define('DB_HOST', 'localhost');


/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');


/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+pF2k]UWEmG:`)of!_dN$sPQ+@OSA}y*%krr4slO23u-1dsZS*Sa@QL|R1:AgXBM');

define('SECURE_AUTH_KEY',  'FkW8v/az`i5&.|XOpl9-k:$bl`+R[0.n9dAn?+%Gl@KZ_?-PD(v6h37bfc?=|n^h');

define('LOGGED_IN_KEY',    '42|p| =ffOslAVis/h@&B+GQ1RYQGVLxKu-/|!2WZakq;e2-pZkAV4fm7zE5yd.I');

define('NONCE_KEY',        'k+vu>-2W<Myvn57~GR6[dVVK+a[E38klzVz~qMr|GVas`*-|(prq$ee|<2j?5%J`');

define('AUTH_SALT',        'U[Oq>m)(Lwy*y|oT#XX`U9hh^>.],1gjY]Lm1]A7P~FwWz}gU?!_ch@6+52u}Bue');

define('SECURE_AUTH_SALT', '*%#E%@e=p|2I0_8(iia.603H)^o45.Rnw=R`SV5sgihF-cX)(qIj+;rCapS^NdJ`');

define('LOGGED_IN_SALT',   'Dj*3CY-b=;/[QB|-.z=|gk&yyXl#EP#|IJV=x-Ens|zf*u5eznvBm?Fq(3BT}2XH');

define('NONCE_SALT',       'dPX3l+d-N;]0~GS}[%,bb}K2qCB ak2Ud&WbGSNl+.n|5D@f+(o GDg2 ij{,/3j');


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';



/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
