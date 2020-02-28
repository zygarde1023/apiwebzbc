<html>
<body>
<?php 
  $json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
  $data = json_decode($json, true);
  $list = $data['records'];
  
  if (@$_POST['keyword']) {
  
  $json = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s=' . $_POST['keyword']);
  $data = json_decode($json, true);
  $list = $data['records'];
  }
  require_once 'template.php';
  ?>
  
  <form method = "post">
					<span class="input-group-text" id="search">
					<input type="text" id="search" name = "keyword" class="input-group-text" placeholder="Search now"  >
					<input type = "submit" class="btn btn-primary mr-2">
					</span>
	</form>
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
        <td><a href = "index.php?view=details&id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></td>
        <td><?php echo $value['price'];?></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['category_name'];?></td>
    </tr>
   </tbody>
    <?php }?>
  </table>
</body>
</html>
