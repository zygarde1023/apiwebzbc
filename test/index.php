<?php
switch ($_GET['page']) {
    case 'product':
        include("products/list.php");
        break;
    case 'add':
        create
        break;
   // case 'view':
     //   view
//break;
    default:
         include("products/list.php");
		 break;
?>
