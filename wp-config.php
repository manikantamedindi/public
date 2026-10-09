<?php
# Database Configuration
define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'AL<[ZY-;pp[ <1{}rw !2-zP&#UjY;A9LHMWG0Fv[H.(p8f.QA[}we1,>gv:9ra`');
define('SECURE_AUTH_KEY',  'R9P~i$oD%s5Kf:U?<<?kj;|r=!;id]b( O(W._NM%Q.9CrYVRt?:H=Seu*&ha-N@');
define('LOGGED_IN_KEY',    '^{BvhgkTx{<XS*z-%6obztsec5vxtuB5|&0L|@oMyZ[*NKw-<{?{Z_{VHpI44*24');
define('NONCE_KEY',        '7I1-}|3&33W(,[wI jhFNk18{Z=E&y4QmlSs(~M+WJ]pq/bqmx&=9b)Lv]+,oF~Z');
define('AUTH_SALT',        'Su^xlb=Z>bHq"SU806S Eu?(Iiuu?kHWau9t,il!?v}Ots0b<Fe6XJ,+am~@vL.+');
define('SECURE_AUTH_SALT', 'bYWR>f2YA+k<t)3;dhTsSkP0QnC/:-E}o06[6ZzgPGmiuY(nZ^=qm-GHIx;)|OL1');
define('LOGGED_IN_SALT',   ';kwK;5X~tKmGu-j9l{W>p)5F<L]Yr8|u-[;wxQ7}cHhCY|Wt0G-_oa_!$wxGL-9N');
define('NONCE_SALT',       '*AX/oNtq97TyRSdQV*j9_ZV,MHh`8Mc~fc?63kRJc2OQo$phb;zb},xb-dz 1,cy');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'primasolv' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'f410a61c2e330eed054eb51eb624fa26f9847aca' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '402433' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', 250 ); // Configured by WP Engine

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'primasolv.wpenginepowered.com', 1 => 'www.fcawitech.com', 2 => 'fcawitech.com', 3 => 'primasolv.wpengine.com', );

$wpe_varnish_servers=array ( 0 => '127.0.0.1', );

$wpe_special_ips=array ( 0 => '104.196.173.136', 1 => 'pod-402433-utility.pod-402433.svc.cluster.local', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WP_SITEURL', 'https://fca-witechcom.local/' );

define( 'WP_HOME', 'https://fca-witechcom.local/' );

define( 'WPE_SFTP_ENDPOINT', '34.138.141.189' );

/*MEMCACHED_ENV_START*/ if (isset($_ENV['WPE_CACHE_HOST'])) $memcached_servers=array ( 'default' =>  array ( 0 => $_ENV['WPE_CACHE_HOST'], ), ); /*MEMCACHED_ENV_END*/
define('WPLANG','');

# WP Engine ID


# WP Engine Settings

// 
// 

error_log($_SERVER['HTTP_X_FORWARDED_HOST']);

if ( (!empty( $_SERVER['HTTP_X_FORWARDED_HOST'])) || (!empty( $_SERVER['HTTP_X_FORWARDED_FOR'])) ) {
    $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
//     define( 'WP_HOME', 'https://fca-witechcom.local/' );
//     define( 'WP_SITEURL', 'https://fca-witechcom.local/' );
} 


# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');














