<?php
$view = '';
switch ($view) {
	case 'list' :
		$content 	= 'list.php';
		$pageTitle = 'API ZBC';
		break;

		
	default :
		$content 	= 'list.php';
		$pageTitle = 'API ZBC';
}
include ($content);
require_once '../template.php';
?>
