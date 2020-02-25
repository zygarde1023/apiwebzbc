<html>
<body>
<?php 
  $json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
  $data = json_decode($json, true);
  $list = $data['records'];
  ?>
  <table border = "1">
   <thead>
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
      <th>Category</th>
    <tr>
   </thead>
   <tbody>
   <?php
     foreach( $list as $value )
    {?>
     <tr>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['price'];?></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['category_name'];?></td>
    </tr>
   </tbody>
    <?php }?>
  </table>
</body>
</html>
