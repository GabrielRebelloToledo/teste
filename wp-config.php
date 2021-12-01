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
define( 'DB_NAME', 'epiz_30493486_wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'epiz_30493486' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'TeZY18CiwzpTC' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'sqlXXX.epizy.com' );

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
define( 'AUTH_KEY',         '7?#.*:Ze0@?GZ-fhp;^(;*~i`4kEpu|NP3!ZK?6B|O,pZ,#akzKAGR|FIez!VS<K' );
define( 'SECURE_AUTH_KEY',  'H3j#i7}n,_noW?NUZ9WAa>bqm[<JHC$w?)/=NGL:+6u3ql>j%U*4NeeNa8aC}p<Q' );
define( 'LOGGED_IN_KEY',    '{Vrmp_yZ,Kbo!<P..~d4K{]CHB2lcgq1ZW9Tr:P=3SS rh3|(1v.ln.3X 3h@?w5' );
define( 'NONCE_KEY',        'p)mAc^72KDGAoOL:?~|B)lTlH7#)]jm]0|2ZB^CNXG9!/TsA,oT}H!-V<7hy>/Y[' );
define( 'AUTH_SALT',        'id%L#<:tTLT[_}wD{r~;7C+CQ6;/u^=L{>Uy&H#JV~6<R;{Lt}@5]m}4$-KuHmLe' );
define( 'SECURE_AUTH_SALT', 'pVGPaPuTk4)kZh1A|$;i??XhP]|ZZQ^%P7l`;A>FDW-9*Y.L`njS}bqxd&yW/+A_' );
define( 'LOGGED_IN_SALT',   '}#8g|T)7AeCR zxTSKzyp`ux*Mpt1cm{_*|uihesZ1<5ynd)Zfzei=?)98zZ.e. ' );
define( 'NONCE_SALT',       'IQKoO#zSo(X8lN/C2ps2JU}D^Av_xFPgxyZD2aC8h$9TDK$<Rs{bdr<Uu~^dHg9h' );

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
