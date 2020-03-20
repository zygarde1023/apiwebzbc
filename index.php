<?php
include('configgl.php');

if($login_button == true){
	include('configfb.php');
  }
$view = isset($_GET['view']) ? $_GET['view'] : '';
if($login_button == ''){
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
		$content 	= 'products/index.php';
		$pageTitle = 'Products';
		$username = 'ZBC';
}
 }else{
          echo '<br><br><br><br><div align="center"><p class="login-font">Login With:<br>
	      </p>'.$login_button . '</div>';
        }
        ?>
	       <br><br>
        <?php
              if(isset($facebook_login_url)){
            echo '<div align="center">' .$facebook_login_url. '</div>';
            }else{
			
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
		$content 	= 'products/index.php';
		$pageTitle = 'Products';
		$username = 'ZBC';
	}
}
			
//require_once $content;
require_once 'template.php';
?>
