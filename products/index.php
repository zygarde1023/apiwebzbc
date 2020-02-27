<?php
$view = isset($_GET['view']) ? $_GET['view'] : '';
switch ($view) {
	case 'list' :
		$content 	= 'list.php';
		$pageTitle = 'Product';
		$username = 'ZBC';
		break;
		
	case 'create' :
		$content 	= 'create.php';
		$pageTitle = 'Product';
		$username = 'ZBC';
		break;
	
	case 'details' :
		$content 	= 'details.php';
		$pageTitle = 'Product';
		$username = 'ZBC';
		break;
	
	case 'update' :
		$content 	= 'update.php';
		$pageTitle = 'Product';
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