<?php

define('CURSCRIPT', 'end');
define('IN_GAME', true);
defined('GAME_ROOT') || define('GAME_ROOT', dirname(__FILE__).'/');

require GAME_ROOT.'./include/global.func.php';

$url = url_dir().'command.php';
$context = array('page'=>'command_end');
foreach($_POST as $pkey => $pval){
	$context[$pkey] = $pval;
}
$cookies = array();
foreach($_COOKIE as $ckey => $cval){
	if(strpos($ckey,'user')!==false || strpos($ckey,'pass')!==false) $cookies[$ckey] = $cval;
}
$endinfo = send_post($url, $context, $cookies);
echo $endinfo;

/* End of file end.php */
/* Location: /end.php */