<?php
$view = isset($_GET['view']) ? $_GET['view'] : '';
switch ($view) {
	case 'list' :
		$content 	= 'products/index.php';
		$pageTitle = 'Products';
		$username = 'ZBC';
		break;
	
	case 'create' :
		$content 	= 'products/create.php';
		$pageTitle = 'Products';
		$username = 'ZBC';
		break;
	
	case 'details' :
		$content 	= 'products/details.php';
		$pageTitle = 'Product';
		$username = 'ZBC';
		break;
	
	case 'update' :
		$content 	= 'products/update.php';
		$pageTitle = 'Product';
		$username = 'ZBC';
		break;
		
	case 'cat_list' :
		$content 	= 'category/list.php';
		$pageTitle = 'Category';
		$username = 'ZBC';
		break;
		
	default :
		$content 	= 'login.php';
		$pageTitle = 'Products';
		$username = 'ZBC';
}
//require_once $content;
require_once 'template.php';
?>
