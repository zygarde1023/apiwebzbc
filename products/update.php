<?php
include ("function/apifc.php");
$id = $_GET['id'];

$data = $apis->get_single_product($id);
$categories = $apis->get_categories();
require_once 'template.php';
?>
<html>
<body>
	<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Product</h4>
                  <form class="forms-sample" action="process.php?action=modify&id=<?php echo $id ?>" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Description</label>
                      <input type="text" class="form-control" name="description" value="<?php echo $data['description'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Price</label>
                      <input type="text" class="form-control" name="price" value="<?php echo $data['price'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Category</label>
                        <select name ="category" class="form-control" id="exampleSelectGender">
                        <?php foreach ($categories as $category) { ?>
                                <option value="<?php echo $category['id'] ?>" <?php if ($category['id'] == $data['category_id']) echo "selected" ?>><?php echo $category['name'] ?></option>
                        <?php } ?>
                        </select>
                      </div>
                     <button type="submit" name = "submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light" href = "api/index.php">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
</body>
</html>