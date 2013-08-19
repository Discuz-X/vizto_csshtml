<?PHP defined('IN_DISCUZ') || die('Access Denied');
function tmp($name = null) {
	if($name === null) {
		$backtrace = debug_backtrace();
		$filename  = basename($backtrace[0]['file']);
		$dotpos    = strpos($filename, '.');
		$basename  = substr($filename, 0, $dotpos);
	} else {
		$basename = $name;
	}
	return template(IDENTIFIER.':'.$basename);
}

function vlang(string $message) {
	return lang('plugin/'.IDENTIFIER, $message);
}