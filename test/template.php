<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="admin.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
  <tr>
    <td width="600" valign="top" class="contentArea">
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
        <tr>
          <td>
				<?php
					require_once $content;	 
				?>
          </td>
        </tr>
        </table>
	</td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="center">Copyright &copy; <?php echo date('Y'); ?> - API ZBC</p>
</body>
</html>
