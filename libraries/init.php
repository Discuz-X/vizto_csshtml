<?PHP defined('IN_DISCUZ') || die('Access Denied');
global $_G;
define('DS', DIRECTORY_SEPARATOR);
define('IDENTIFIER', basename(dirname(dirname(__FILE__)))); //统一管理插件标识符
(!defined('IN_ADMINCP') || !IN_ADMINCP) && $_C = $_G['cache']['plugin'][IDENTIFIER]; //读取设置
define('PLUGIN_VERSION', $_G['setting']['plugins']['version'][IDENTIFIER]);
define('PLUGIN_ROOT', dirname(dirname(__FILE__)));
define('PLUGIN_DIR', str_replace(DISCUZ_ROOT, '', PLUGIN_ROOT));
$plugintitle = '页面开发辅助工具';
include 'func.php';