<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'tests');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{&!Ue`.$.Hd}jXAD)(Sh7@PoKYM#x?Zn2=+qg;t%t5UF*_[~,AVSB){ThoIT{A(R');
define('SECURE_AUTH_KEY',  ' BU1z5~:=wd.`oIn7a84$Bk]!RW~bMT|Nz-J9n9vw_rge<*C4={RJB}Bm;:Pu+EX');
define('LOGGED_IN_KEY',    '!]rj%8ouG8m;3}$?KCTl2C8JTL/4&k+uxveJfUJ[)VUy.!9ij:=N0l3^WEs|@=6<');
define('NONCE_KEY',        'XH|lYN<Jj$[n*_ITGZ$_| rpQyM.9t`uL(eC>Y*^5Br8)!P!:5vT)kiyU sPc[Lp');
define('AUTH_SALT',        '>Ke?~6x63-?a?R56d!k9~q9Jmi13WrM^JtkS!z$t>h^7/ GPR<kWKl t!|eNs0__');
define('SECURE_AUTH_SALT', 'BzIE~WXY~LIqXM0&RX60OW4b1uNlEGqJ>PbJugE(uc!:,/ZTR JC%|P*)9E[C*-a');
define('LOGGED_IN_SALT',   ':h4q;QHbP9x5&}uoOd@kz-&:Q(irt*YDAY3Jw%k!zzxPV-(vs5WKXJn6 ]8{8:y[');
define('NONCE_SALT',       '5K$?FKcxb({YhSdw7+>.PH^CgNB^Fc`fc}x8IUF4/lr=MhF&Nt:G4M)jy@LGY%t}');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_test';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
