<?php
$view = isset($_GET['view']) ? $_GET['view'] : '';
switch ($view) {
	case 'list' :
		$content 	= 'list.php';
		$pageTitle = 'Category';
		$username = 'ZBC';
		break;
		
	default :
		$content 	= 'list.php';
		$pageTitle = 'Products';
		$username = 'ZBC';
}
require_once $content;
//require_once '../template.php';
?>