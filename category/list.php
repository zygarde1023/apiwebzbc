<html>
<body>
<?php
	include ("function/apifc.php");
	$categories = $apis->get_categories();
  ?>
  <table border = "1">
   <thead>
    <tr>
      <th>Category ID</th>
      <th>Category Name</th>
    <tr>
   </thead>
   <tbody>
   <?php
     foreach( $categories as $value )
    {?>
     <tr>
        <td><?php echo $value['id'];?></td>
        <td><?php echo $value['name'];?></td>
    </tr>
   </tbody>
    <?php }?>
  </table>
</body>
</html>
